<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produtos::all();

        return view('produtos.index', compact('produtos'));
    }

    public function show($id){
        $produto = Produtos::find($id);

        return view('produtos.show', compact( 'produto'));
    }

    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){



        $produto = new Produtos();

        $produto->sku = $request->input('sku');
        $produto->titulo = $request->input('titulo');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');

        if($produto->save()){
            return redirect()->route('produtos.create')->with('success', 'Produto Cadastrado com sucesso!');
        }

    }
}
