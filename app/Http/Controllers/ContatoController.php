<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class ContatoController extends Controller
{
    public function index(){
        return view('contato.create');

    }

    public function enviar(){

    }
}
