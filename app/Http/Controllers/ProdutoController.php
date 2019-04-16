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

    public function edit($id){
        $produto = Produtos::find($id);

        return view('produtos.edit', compact( 'id', 'produto'));
    }

    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){

        $msgm = [

            'sku.required' => 'O SKU é obrigatório',
            'sku.unique' => 'Esse SKU já está cadastrado',
            'sku.min' => 'O SKU tem que ter no mínimo 3 caracteres',

            'titulo.required' => 'O titulo é obrigatório',
            'titulo.min' => 'O titulo tem que ter no mínimo 3 caracteres',

            'descricao.required' => 'A descrição é obrigatório',
            'descricao.min' => 'A descrição tem que ter no mínimo 10 caracteres',

            'preco.required' => 'O preço é obrigatório',
            'preco.numeric' => 'O campo preço é só números',
        ];

        $this->validate($request,[
            'sku'       =>  'required|unique:produtos|min:3',
            'titulo'    =>  'required|min:3',
            'descricao' =>  'required|min:10',
            'preco'     =>  'required|numeric|',
        ], $msgm);

        $produto = new Produtos();

        $produto->sku = $request->input('sku');
        $produto->titulo = $request->input('titulo');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');

        if($produto->save()){
            return redirect()->route('produtos.create')->with('success', 'Produto Cadastrado com sucesso!');
        }

    }

    public function update(Request $request, $id){

        $produto = Produtos::find($id);

        $msgm = [

            'sku.required' => 'O SKU é obrigatório',
            'sku.min' => 'O SKU tem que ter no mínimo 3 caracteres',

            'titulo.required' => 'O titulo é obrigatório',
            'titulo.min' => 'O titulo tem que ter no mínimo 3 caracteres',

            'descricao.required' => 'A descrição é obrigatório',
            'descricao.min' => 'A descrição tem que ter no mínimo 10 caracteres',

            'preco.required' => 'O preço é obrigatório',
            'preco.numeric' => 'O campo preço é só números',
        ];

        $this->validate($request,[
            'sku'       =>  'required|min:3',
            'titulo'    =>  'required|min:3',
            'descricao' =>  'required|min:10',
            'preco'     =>  'required|numeric|',
        ], $msgm);

        $produto->sku = $request->get('sku');
        $produto->titulo = $request->get('titulo');
        $produto->descricao = $request->get('descricao');
        $produto->preco = $request->get('preco');

        if($produto->update()){
            return redirect()->back()->with('success', 'Produto Atualizado com sucesso!');
        }

    }
}
