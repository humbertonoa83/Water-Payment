<?php


namespace App\Http\Controllers;


use App\Models\Address;
use App\Models\Client;
use App\Models\ClientType;
use App\Models\Counter;
use App\Models\Document;
use App\Models\User;
use App\Notifications\Client\SendClientCredencialsNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getRowDetailsData()
    {
        $users = User::select(['id','created_at', 'updated_at']);

        return Datatables::of($users)->make(true);
    }
    public function index(Request $request)
    {
        if(request()->ajax())
        {
            if(!empty($request->from_date))
            {
                $data = DB::table('clients')
                    ->whereBetween('created_at', array($request->from_date, $request->to_date))
                    ->get();
            }
            else
            {
                $data = DB::table('clients')
                    ->get();
            }
            return datatables()->of($data)->make(true);
        }
        $counters =Counter::all();
        $clients = Client::all();
        $document_types =   config('enums.document_types');
        return view('client.index',compact('counters', 'clients','document_types'));

//        $clients = Client::all();
//        \LogActivity::addToLog('My Testing Add To Log.');
//        return view('client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients_type =ClientType::all();
        $counters =Counter::all();
        $document_types =   config('enums.document_types');
        return view('client.back',compact('clients_type','counters','document_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Primeiro cria-se o usuário e depois o cliente

        //Create a new User Account
        $randomPassword = Str::random(10);
        $userData = [
            'name'     => $request->name." " . $request->surname,
            'avatar'   => '/uploads/images/user_default.png',
            'email'    => $request->email,
            'password' => bcrypt($randomPassword)
        ];

        $newUser = User::create($userData);
        //User on Client Role
        $newUser->assignRole('client');

        $client = Client::create(
            $request->only(['name','surname' ,'email', 'telefone', 'gender', 'nationality', 'client_type_id', 'user_id']));
        $client->user_id = $newUser->id;

        $client->save();

        $address = new Address();
        $address->country           =   $request->country;
        $address->province          =   $request->province;
        $address->district          =   $request->district;
        $address->neighborhood      =   $request->neighborhood;
        $address->street            =   $request->street;
        $address->avenue            =   $request->avenue;
        $address->block             =   $request->block;
        $address->place_number      =   $request->place_number;
        $address->client_id         =   $client->id;
        $address->save();

        $document = new Document();
        $document->document_number   =   $request->document_number;
        $document->document_type     =   $request->document_type;
        $document->issue_place       =   $request->issue_place;
        $document->issue_date        =   $request->issue_date;
        $document->expiration_date   =   $request->expiration_date;
        $document->client_id         =   $client->id;
        $document->save();

        $counter = Counter::find($request->counter_id);
        $counter->status             =   1; //0-Inativo 1-Activo
        $counter->client_id          =   $client->id;
        $counter->save();

        //Notificar o utilizador que sua conta foi registada
        $client->notify(new SendClientCredencialsNotification($client, $request->email, $randomPassword));



        return redirect()->to('/clients')->with(['message' => 'Cliente adicionado com sucesso']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $clients_type   =   ClientType::all();
        $counters       =   Counter::all();
        $address        =   Address::where('client_id', $client->id);
        return view('client.edit', compact('clients_type','counters','client','address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        Client::where('id', $client->id)
            ->update($request->only(['name','surname', 'document_type', 'document_name', 'email', 'telefone', 'gender', 'address', 'nationality', 'country','counter_id','client_type_id']));

        return redirect()->to('/clients')->with(['message' => 'Cliente actualizado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $message = 'O Cliente \'' . $client->name . '\' foi deletado com sucesso.';

        $client->delete();

        return redirect()->to('/clients')->with(['message' => $message]);
    }
}
