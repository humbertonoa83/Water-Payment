<?php


namespace App\Http\Controllers;


use App\Models\Counter;
use App\Models\Recharge;
use App\Models\Sell;
use Illuminate\Http\Request;
use Paymentsds\MPesa\Client;

class RechargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stack = array();
        $counters = Counter::all();
        $actualMonth = \Carbon\Carbon::now()->month;

        foreach ($counters as $counter){
            $sell =$counter->rechargerSell()->latest();
            if($sell->first() ==null){
                array_push($stack, $counter);
                continue;
            }
            $sellDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $counter->created_at)->format('m');
            if($actualMonth<$sellDate){
                array_push($stack, $counter);
            }
        }
        $recharges = Sell::all();
        $counters = Counter::all();
        //$counters = Counter::where('user_id',auth()->id())->get();
        $sell_recharges_second = Sell::where('via' , 2)->get();



        return view('recharge.index',compact('recharges','counters','sell_recharges_second','stack'));
    }

    public function mpesaPayment(Request $request){

        return redirect()->to('/mpesaPayment')->with(['message' => 'Mpesa adicionado com sucesso']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recharge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $celular = '844552968';
        $valor = 10;
        $reference = '7y7y7y37t3g';
//        $recharge = Recharge::create($request->only(['reference', 'value','code']));
//        $recharge->save();
        $client = new Client ([
            'apiKey' =>'5rqh0hssv2qtmp9648ys9nt83l0w65o2',
            'publicKey' => 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAmptSWqV7cGUUJJhUBxsMLonux24u+FoTlrb+4Kgc6092JIszmI1QUoMohaDDXSVueXx6IXwYGsjjWY32HGXj1iQhkALXfObJ4DqXn5h6E8y5/xQYNAyd5bpN5Z8r892B6toGzZQVB7qtebH4apDjmvTi5FGZVjVYxalyyQkj4uQbbRQjgCkubSi45Xl4CGtLqZztsKssWz3mcKncgTnq3DHGYYEYiKq0xIj100LGbnvNz20Sgqmw/cH+Bua4GJsWYLEqf/h/yiMgiBbxFxsnwZl0im5vXDlwKPw+QnO2fscDhxZFAwV06bgG0oEoWm9FnjMsfvwm0rUNYFlZ+TOtCEhmhtFp+Tsx9jPCuOd5h2emGdSKD8A6jtwhNa7oQ8RtLEEqwAn44orENa1ibOkxMiiiFpmmJkwgZPOG/zMCjXIrrhDWTDUOZaPx/lEQoInJoE2i43VN/HTGCCw8dKQAwg0jsEXau5ixD0GUothqvuX3B9taoeoFAIvUPEq35YulprMM7ThdKodSHvhnwKG82dCsodRwY428kg2xM/UjiTENog4B6zzZfPhMxFlOSFX4MnrqkAS+8Jamhy1GgoHkEMrsT5+/ofjCx0HjKbT5NuA2V/lmzgJLl3jIERadLzuTYnKGWxVJcGLkWXlEPYLbiaKzbJb2sYxt+Kt5OxQqC1MCAwEAAQ==',
            'serviceProviderCode' => '171717'
        ]);

        if(!empty($celular) || !empty($valor) || !empty($reference)){
            $paymentData = [
                'from' => '258' . $celular,         // input_CustomerMSISDN
                'reference' => $reference,          // input_ThirdPartyReference
                'transaction' => 'T12344CC',        // input_TransactionReference
                'amount' => $valor                  // input_Amount
            ];

            $result = $client->receive($paymentData);

            if ($result->success) {
                dd( "Pagamento efectuado!");
            } else {
                dd("Falha ao processar pagamento");
            }
        }else{
            dd("Preencha todos os campos do formulário");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function show(Recharge $recharge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function edit(Recharge $recharge)
    {
        return view('recharge.edit', ['recharge' => $recharge]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recharge $recharge)
    {
        Recharge::where('id', $recharge->id)
            ->update($request->only(['reference', 'value','code']));

        return redirect()->to('/recharges')->with(['message' => 'Recarga actualizada com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recharge $recharge)
    {
        $message = 'A recarga com a referencia  \'' . $recharge->reference. '\' foi deletada com sucesso.';
        $recharge->delete();
        return redirect()->to('/recharges')->with(['message' => $message]);
    }
}
