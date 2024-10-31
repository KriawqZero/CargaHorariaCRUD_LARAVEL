<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Servidor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function redirecionarLogin() {
        return view('Logins.EstudanteLogin');

    }

    public function redirecionarLoginServidor() {
        return view('Logins.ServidorLogin');
    }

    //Autenticar como aluno
    public function autenticar(Request $request) {
        $request->validate([
            'cpf' => 'required',
            'data_nascimento' => 'required',
        ]);

        $data_nascimento = Carbon::createFromFormat('d/m/Y', $request['data_nascimento'])
            ->format('Y-m-d');

        $usuario = Usuario::where('cpf', $request['cpf'])
            ->where('data_nascimento', $data_nascimento)
            ->first();

        if($usuario) {
            Auth::login($usuario);
            \Session::put('usuario', $usuario);
            \Session::put('Aluno', 1);
            return redirect()
                ->route('home');
        } else {
            return back()
                ->withErrors([
                'mensagem_erro' => 'CPF ou Data de Nascimento inválidas',
            ]);
        }



    }

    //Logar como administrador
    public function admAutenticar(Request $request) {
        $request->validate([
            'email' => 'email|required',
            'senha' => 'required',
        ]);

        $serv_usuario = Servidor::where('email', $request['email'])
            ->where('senha', $request['senha'])
            ->first() ;

        if($serv_usuario) {
            Auth::login($serv_usuario);
            \Session::put('usuario', $serv_usuario);
            \Session::put('Servidor', 1);
            return redirect()
                ->route('home');
        } else {
            return back()
                ->withErrors([
                'mensagem_erro' => 'Email ou senha inválidos',
            ]);
        }
    }

    public function deslogar(Request $request) {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->withErrors([
                'mensagem_erro'=> 'Logout efetuado'
            ]);
        // Redireciona para a página de login com uma mensagem de sucesso
    }


    /*

    UTILIZANDO O AUTH 'necessita de senha' e é criptografada


    public function autenticar(Request $request) {
        $credentials = $request->validate([
            'cpf' => ['required'],
            'data_nascimento' => ['required|date'],
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('logado');
        }


    }


    */
}
