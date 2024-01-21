<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientsFormRequest;
use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(Request $request)
    {
        $orderBy = $request->input("select-filter", "NomeCliente");
        $direction = $request->input("direction", "asc");

        $clients = Clients::orderBy($orderBy, $direction)->get();

        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');

        return view('clients.index')
            ->with('clients', $clients)
            ->with('mensagemSucesso', $mensagemSucesso);
    }


    public function create()
    {
        return view('clients.create');
    }

    public function store(ClientsFormRequest $request) 
    {
        $clients = Clients::create($request->all());
        $request->session()->put('mensagem.sucesso','Cliente adicionado com sucesso');

        return redirect()->route('clients.index');
    }

    public function destroy($id, Request $request) 
    {
        $client = Clients::findOrfail($id);
        $client->delete();

        $request->session()->put('mensagem.sucesso','Cliente removido com sucesso');

        return redirect()->route('clients.index');
    }

    public function edit($id) 
    {
        $client = Clients::findOrFail($id);
        return view('clients.edit')->with('client', $client);
    }
    
    public function update(Request $request, $id) 
    {
        $client = Clients::findOrFail($id);
        $client->update($request->all());

        $request->session()
        ->put('mensagem.sucesso','Alterações realizadas com sucesso');
    
        return redirect()->route('clients.index');
    }
}
