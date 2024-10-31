@extends('templates.logintemplate')

@section('title')
    Entrar
@endsection

@section('loginMain')

    <div class="login-container">
        <div class="logo">
            <img src="{{url('assets/images/logoifms.png')}}" alt="logoifms">
        </div>

        @if($errors->any())
            <div id="alert" class="alert alert-danger" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{$errors->first()}}
            </div>
        @endif

        <h6>Entrar como servidor</h6>

        <form action="{{route('adm.login.autenticar')}}" id="login-form" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"/>
            </div>
            <div class="form-group">
                <label for="senha" >Senha:</label>
                <input type="text" id="senha_form" name="senha"/>
            </div>
            <button type="submit">Entrar</button>
        </form>

        <form method="GET" action="{{route('login')}}">
            <button>Sou aluno</button>
        </form>
    </div>

@endsection
