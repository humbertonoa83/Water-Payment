<?php


namespace App\Http\Controllers;


use App\Models\Counter;
use App\Models\Sell;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sell_recharges = Sell::all();
        return view('sell-recharge.index',compact('sell_recharges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $counters = Counter::where('user_id',auth()->id())->get();
        return view('sell-recharge.create',compact('counters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recharge_sell = new Sell();
        $recharge_sell->value            =   $request->value;
        $recharge_sell->code             =   mt_rand(10000000000000, 99999999999999);
        $recharge_sell->references       =    Str::random(10);;
        $recharge_sell->payment_type     =   $request->payment_type;
        $recharge_sell->via              =   $request->via;
        $recharge_sell->counter_id       =   $request->counter_id;
        $recharge_sell->user_id          =   auth()->id();
        $recharge_sell->save();
        return redirect()->to('/recharges')->with(['message' => 'Recarga vendida com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function show(Sell $sell)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function edit(Sell $sell_recharge)
    {
        return view('sell-recharge.edit',compact('sell_recharge'));
    }

    public function secondVia(Request $request)
    {
        $sell = Sell::where('user_id',auth()->id())->orderBy('created_at', 'desc')->first();
        $sell->update($request->only(['via']));

        return redirect()->to('/recharges')->with(['message' => 'Sucesso! A sua ultima recarga é: ' . $sell->code]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sell $sell_recharge)
    {
        Sell::where('id', $sell_recharge->id)
            ->update($request->only(['via']));
        return redirect()->to('/sell-recharges')->with(['message' => 'Segunda via da sua ultima recarga']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sell $sell)
    {
        //
    }
}
