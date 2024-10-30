<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function redirecionarLogin() {
        return view('Logins.EstudanteLogin');

    }

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
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'mensagem_erro' => 'CPF ou Data de Nascimento inválidas',
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
