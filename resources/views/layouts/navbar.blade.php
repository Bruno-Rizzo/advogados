<div class="topnav">

    <div class="container-fluid">

        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <i class="ri-home-line me-2"></i> Início
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button">
                            <i class="ri-book-read-line me-2"></i>Livro de Advogados <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            @can('view', App\Models\Book::class)
                            <a href="{{route('books.index')}}" class="dropdown-item">Registros</a>
                            @endcan
                            @can('research', App\Models\Book::class)
                            <a href="{{route('researchs.index')}}" class="dropdown-item">Pesquisas</a>
                            @endcan
                            @can('report', App\Models\Book::class)
                            <a href="{{route('reports.index')}}" class="dropdown-item">Relatórios</a>
                            @endcan
                        </div>
                    </li>

                    @can('view', App\Models\User::class)

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button">
                            <i class=" ri-user-settings-line me-2"></i>Configurações <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <a href="{{route('users.index')}}" class="dropdown-item">Usuários</a>
                        </div>
                    </li>

                    @endcan

                    @can("admin")

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button">
                            <i class=" ri-terminal-box-line me-2"></i>Desenvolvimento <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <a href="{{route('prisionalUnits.index')}}" class="dropdown-item">Lotações</a>
                            <a href="{{route('roles.index')}}" class="dropdown-item">Funções</a>
                            <a href="{{route('users.search')}}" class="dropdown-item">Senha</a>
                            <a href="{{route('audits.index')}}" class="dropdown-item">Auditoria</a>
                        </div>
                    </li>

                    @endcan

                </ul>

            </div>

        </nav>

    </div>

</div>

