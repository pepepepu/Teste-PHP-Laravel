<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsFormRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request)
    {
        $orderBy = $request->input("select-filter", "CodBarras");
        $direction = $request->input("direction", "asc");

        $products = Product::orderBy($orderBy, $direction)->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        $request->session()->forget('mensagem.sucesso');
        return view('products.index')
        ->with('products', $products)
        ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductsFormRequest $request)
    {
        $products = Product::create($request->all());
        $request->session()->put('mensagem.sucesso','Produto adicionado com sucesso');
        return redirect()->route('products.index');
    }

    public function destroy($id, Request $request)
    {
        $product = Product::findOrfail($id);
        $product->delete();

        $request->session()->put('mensagem.sucesso','Produto removido com sucesso');

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit')->with('product', $product);
    }
    
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        $request->session()
        ->put('mensagem.sucesso','Alterações realizadas com sucesso');
    
        return redirect()->route('products.index');
    }
}
