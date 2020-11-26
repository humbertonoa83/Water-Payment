<?php


namespace App\Http\Controllers;


use App\Models\Client;
use App\Models\Counter;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(request()->ajax())
        {
            $data = Counter::select('*');
            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('status', function($row){
                    if($row->status == 0){
                        return 'Activo';
                    }else{
                        return 'Desativo';
                    }
                })
                ->addIndexColumn()
                ->addColumn('client_id', function($row){
                    if($row->status){
                        return $row->client()->first()->name;
                    }else{
                        return 'Sem cliente';
                    }
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->get('status') == '0' || $request->get('status') == '1') {
                        $instance->where('status', $request->get('status'));
                    }else{
                        $instance->where(function($w) use($request){
                            $search = $request->get('status');
                            $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('brand', 'LIKE', "%$search%");
                        });
                    }
                    if ($request->get('brand')) {
                        $instance->where('brand', $request->get('brand'));
                    }
                    if ($request->get('client_id')) {
                        $instance->where('client_id', $request->get('client_id'));
                    }
                    if (!empty($request->get('search'))) {
                        $instance->where(function($w) use($request){
                            $search = $request->get('search');
                            $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('brand', 'LIKE', "%$search%");
                        });
                    }
                })
                ->rawColumns(['status'])
                ->rawColumns(['client_id'])
                ->make(true);
        }
//        return view('counter.index');

        $countCounters = DB::table('counters')->count();

        $clients = Client::all();
        $counters = Counter::all();

        return view('counter.index',compact('counters','countCounters','clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('counter.create');
    }

    public function new_counter(){
        $clients     =   Client::all();
        $counters    =   Counter::all();
        return view('counter.new',compact('counters','clients'));
    }

    public function save_counter(Request $request){

        $client  =  Client::where('id', $request->client_id)
            ->update($request->only(['counter']));

        return redirect()->to('/clients')->with(['message' => 'Novo contador atribuido ocom sucesso']);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $counter = Counter::create($request->only(['name', 'brand','reference','status']));
        $counter->save();
        return redirect()->to('/counters')->with(['message' => 'Contador adicionado com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function show(Counter $counter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function edit(Counter $counter)
    {
        return view('counter.edit', ['counter' => $counter]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Counter $counter)
    {
        Counter::where('id', $counter->id)
            ->update($request->only(['name', 'brand','reference']));

        return redirect()->to('/counters')->with(['message' => 'Contador actualizado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counter $counter)
    {
        $message = 'O Contador \'' . $counter->name . '\' foi deletado com sucesso.';

        $counter->delete();

        return redirect()->to('/counters')->with(['message' => $message]);
    }
}

{

}
