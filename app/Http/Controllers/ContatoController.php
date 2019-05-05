<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Mail;


class ContatoController extends Controller
{
    public function index(){
        return view('contato.create');

    }

    public function enviar(Request $request){

        $dadosEmail = [
            'nome'=>$request->input('nome'),
            'email'=>$request->input('email'),
            'mensagem'=>$request->input('mensagem'),
        ];

        Mail::send('email.contato', $dadosEmail, function ($message){
            $message->from('formulario@pontocomdesenvolvimento.net', 'Formulario de Contato');
            $message->subject('Mensagem enviada pelo formulário de contato');
            $message->to('tiagokorn@hotmail.com')->cc('tiagokorn@hotmail.com');
        });

        return redirect()->route('contato')->with('success', 'Mensagem enviada! Em breve entraremos em contato');
    }
}
