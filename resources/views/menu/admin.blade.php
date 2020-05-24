<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow" id="menu-admin-default">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/admin') }}">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gerencia
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('admin/lista_usuario') }}"><i class="fas fa-list"></i> Usuários</a>
                        <a class="dropdown-item" href="{{ url('admin/configuracao') }}"><i class="fas fa-list"></i> Configuração</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/feed') }}">Feed</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Financeiro
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('admin/financeiro_taxa') }}"><i class="fas fa-list"></i> Taxas</a>
                        <a class="dropdown-item" href="{{ url('admin/financeiro_publicidade') }}"><i class="fas fa-list"></i> Publicidade</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/sair') }}">Sair</a>
                </li>
            </ul>
            <span class="navbar-text">
                Administrador
            </span>
        </div>
    </div>
</nav>