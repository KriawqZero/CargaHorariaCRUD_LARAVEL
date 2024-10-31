
<header>
    <nav class="navbar navbar-expand-sm mb-3">
        <div class="container-fluid">
            <a class="navbar-brand">Carga Horaria - CRUD</a>

            <div class="collapse d-sm-inline-flex justify-content-between">
                <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link">Página Inicial</a>
                    </li>
                    @if(session('Aluno') == 1)
                    <li class="nav-item">
                        <a class="nav-link">Enviar comprovante</a>
                    </li>
                    @elseif(session('Servidor') == 1)
                    <li class="nav-item">
                        <a class="nav-link">Validar Comprovantes</a>
                    </li>
                    @endif
                    <li>
                        <form id='logout' class="nav-item" action="{{route('login.deslogar')}}" method="POST">
                            @csrf
                            <a class="nav-link" href="javascript:" onclick="document.getElementById('logout').submit();">Sair</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
