<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchasesFormRequest;
use App\Models\Clients;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index(Request $request)
    {
        $orderBy = $request->input("select-filter", "cliente_id");
        $direction = $request->input("direction", "asc");

        $purchases = Purchase::orderBy($orderBy, $direction)->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        $request->session()->forget('mensagem.sucesso');
        return view('purchases.index')
        ->with('purchases', $purchases)
        ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('purchases.create');
    }

    public function store(PurchasesFormRequest $request)
    {
        $cliente_nome = trim($request->input("cliente_id"));
        $cliente = Clients::where('NomeCliente', $cliente_nome)->first();
    
        if (!$cliente) {
            return redirect()->route('purchases.create');
        }
    
        $produto_codigo = $request->input("produto_id");
        $produto = Product::where('CodBarras', $produto_codigo)->first();
    
        if (!$produto) {
            return redirect()->route('purchases.create');
        }
    
        $purchaseData = [
            'cliente_id' => $cliente->id,
            'produto_id' => $produto->id,
            'Quantidade' => $request->input('Quantidade'),
            'Desconto' => $request->input('Desconto'),
            'status' => $request->input('status'),
        ];
    
        $purchase = Purchase::create($purchaseData);
        $request->session()->put('mensagem.sucesso', 'Pedido adicionado com sucesso');
    
        return redirect()->route('purchases.index');
    }

    public function destroy($id, Request $request)
    {
        $purchase = Purchase::findOrfail($id);
        $purchase->delete();

        $request->session()->put('mensagem.sucesso','Pedido removido com sucesso');

        return redirect()->route('purchases.index');
    }

    public function edit($id)
    {
        $purchase = Purchase::findOrFail($id);
        return view('purchases.edit')->with('purchase', $purchase);
    }
    
    public function update(Request $request, $id)
    {
        $purchase = Purchase::findOrFail($id);

        $purchase->Quantidade = $request->input('Quantidade');
        $purchase->Desconto = $request->input('Desconto');
        $purchase->status = $request->input('status');
        $purchase->save();

        $request->session()
        ->put('mensagem.sucesso','Alterações realizadas com sucesso');

        return redirect()->route('purchases.index');
    }

    public function show($id) 
    {
        $purchase = Purchase::findOrFail($id);
        return view('purchases.show')->with('purchase', $purchase);
    }
    
}
