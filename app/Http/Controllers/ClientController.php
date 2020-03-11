<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::All();
        return view('Clients.index',compact(['clients']));      
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $regras = [
            'name' => 'required|min:2|max:20',          
            'mail' => 'required|email|unique:clientes',
            'age' => 'required|lt:200',
            'address' => 'required'
        ];
            
        $mensagens = [
            'name.required' => 'Digite um nome válido.',
            'name.min' => 'O nome precisa ter no mínimo 2 letras.',
            'name.max' => 'O nome tem um tamanho máximo de 20 letras.',
            'age.required' => 'A idade é requerida.',
            'age.lt' => 'A idade máxima é de 150 anos.',
            'mail.required' => 'Digite um endereço de email.',
            'mail.email' => 'Digite um endereço de email válido',
            'mail.unique' => 'Email já cadastrado',
            'address.required' => 'Digite um endereço válido',            
        ];
            
        $request->validate($regras, $mensagens);
        
        $client = new Client();
        $client->name = $request->name;
        $client->mail = $request->mail;
        $client->age = $request->age;
        $client->address = $request->address;        
        $client->save();
        
        return redirect()->route('Client.index');     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
