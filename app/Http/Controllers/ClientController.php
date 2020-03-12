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
            'mail' => 'required|email|unique:clients',
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

    public function show($id)
    {
        $client = Client::find($id);
        return view('Clients.info',compact(['client']));
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('Clients.edit',compact(['client']));
    }

    public function update(Request $request, $id)
    {
        $regras = [
            'name' => 'required|min:2|max:20',          
            'mail' => 'required|email|unique:clients',
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

        $c = Client::find($id);
        $c->name = $request->name;
        $c->age = $request->age;
        $c->address = $request->address;
        $c->mail = $request->mail;
        $c->save(); 
     
        return redirect()->action('ClientController@index');
    }

    public function destroy($id)
    {   
        $client = Client::find($id);
        $client->delete();

        return redirect()->action('ClientController@index');
    }
}
