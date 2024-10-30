@extends('templates.logintemplate')

@section('title')
    Entrar
@endsection

@section('loginMain')

    <div class="login-container">
        <div class="logo">
            <img src="{{url('assets/images/logoifms.png')}}" alt="logoifms">
        </div>
        <g6>Entrar como aluno</g6>

        <!--
        <div id="alert" class="alert alert-danger" role="alert">
            <button type="button" class="btn btn-danger btn-sm close-alert" data-bs-dimiss="alert" aria-label="Close">X</button>
        </div>
        -->


        <form action="{{route('redirectLogin')}}" id="login-form" method="POST">
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

        <a href="#">Sou professor/servidor</a>

    </div>

    <script>
        const input = document.getElementById("cpf");
        input.addEventListener('keypress', () => {
            let inputlength = input.value.length;

            if (inputlength === 3 || inputlength === 7) input.value += '.';
            if (inputlength === 11) input.value += '-';
        });

        const input_nasc = document.getElementById('datanasc');
        input_nasc.addEventListener('keypress', () => {
            let inputlength_nasc = input_nasc.value.length;

            if (inputlength_nasc === 2 || inputlength_nasc === 5) input_nasc.value += '/';
        })

    </script>
@endsection
