<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function login(Request $request){

        $credencial = $request->only('email', 'password');

        if(Auth::attempt($credencial)){
            return redirect()->route('produtos.index');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
