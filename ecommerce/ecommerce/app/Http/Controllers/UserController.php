<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class USerController extends Controller
{
    
    public function index() {

        return view('welcome');
    
    }

    /* Cadastrar usuário */
    public function store(Request $request) {

        echo $request->email;
        echo $request->password;

    }

}