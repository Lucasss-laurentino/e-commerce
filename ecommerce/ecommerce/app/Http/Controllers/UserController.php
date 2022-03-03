<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use App\Models\Usuario;

class USerController extends Controller
{
    
    public function index() {

        return view('welcome');
    
    }

    /* Cadastrar usuário */
    public function store(Request $request) {

        if(\DB::table('users')->where('email', $request->email_cadastro)->count() == 1) {

            echo 'false';

        } else {

            $cadastrar = new Usuario;

            $cadastrar->name = $request->name;
            $cadastrar->email = $request->email;
            $cadastrar->password = Hash::make($request->password);
            $cadastrar->cep = $request->cep;
            $cadastrar->rua = $request->rua;
            $cadastrar->bairro = $request->bairro;
            $cadastrar->complemento = $request->complemento;
            $cadastrar->numero = $request->numero;
            $cadastrar->cidade = $request->cidade;
            $cadastrar->estado = $request->estado;

            $cadastrar->save();

            echo 'true';



        }

    }

    /* Autenticar usuário */
    public function auth(Request $request) {

        if(Auth::attempt(['email' => $request->email_login, 'password' => $request->password_login])) {
        
            $usuario = Usuario::where('email', $request->email_login)->first()->toArray();
            $request->session()->put('usuario', $usuario);

            echo 'true';
        
        } else {
        
            echo 'false';
        
        }

    }

    /* Sair e destruir sessão */
    public function logout() {
        session()->flush('usuario');
        return redirect('/');
    }

}