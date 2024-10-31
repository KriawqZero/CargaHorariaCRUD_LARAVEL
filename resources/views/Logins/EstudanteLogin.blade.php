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

        <h6>Entrar como aluno</h6>

        <form action="{{route('login.autenticar')}}" id="login-form" method="POST">
            @csrf
            <div class="form-group">
                <label for="cpfForm">CPF:</label>
                <input type="text" maxlength="14" id="cpfForm" name="cpf"/>
            </div>
            <div class="form-group">
                <label for="data_nascimento" >Data de Nascimento:</label>
                <input type="text" id="datanasc" name="data_nascimento" maxlength="10"/>
            </div>
            <button type="submit">Entrar</button>
        </form>

        <form method="GET" action="{{route('adm.login.redirecionar')}}">
            <button>>Sou professor/servidor</button>
        </form>

    </div>

@endsection
