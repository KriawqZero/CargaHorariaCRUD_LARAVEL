@extends('templates.commonLayout')

@section('title') Página inicial @endsection

@section('content')



    <!-- Popup -->
    @if (session('msg'))
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Permissão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{session('msg_popup')}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Fim Popup -->

    <!-- Inicio Aluno-->
    @if(session('Aluno') === 1)

        <div>
            <div class="container" id="total">
                <!--@await Component.InvokeAsync("TotalHoras")-->

                <h1>Logado como {{Auth::user()->nome}}</h1>
            </div>

            <div class="container">
                <!--@await Component.InvokeAsync("Enviados")-->
            </div>
        </div>
        <!-- Fim Aluno -->

        <!-- Começo servidor (professor)-->
    @elseif (session('Servidor') === 1)

        <h1 class="container">Logado como administrador</h1>

        <!-- Fim servidor (professor) -->
    @else

        <h1 class="container">Você não está logado.</h1>

    @endif

    <script>
        // Quando a página é carregada, mostra o popup
        window.addEventListener('DOMContentLoaded', function () {
            $('#myModal').modal('show'); // Mostra o popup
        });
    </script>

@endsection

