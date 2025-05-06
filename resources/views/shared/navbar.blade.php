<nav class="navbar navbar-dark navbar-expand-lg fixed-top navbar-custom">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('productos.listado') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Tio Pan Bakery" style="height: 50px;">
            <span class="brand-text ms-2">Tio Pan Bakery</span>
        </a>

        <!-- Botón hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú colapsable -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
                </li>

                @if (Auth::check() && Auth::user()->Rol === 'admin')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Administrador
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('users.index') }}">Administrar Usuarios</a></li>
                            <li><a class="dropdown-item" href="{{ route('productos.index') }}">Agregar producto</a></li>
                        </ul>
                    </li>
                @endif

                <li class="nav-item">
                    <a href="#" class="nav-link text-white text-decoration-none"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </a>
                
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                
                

                <!-- Instagram -->
                <li class="nav-item">
                    <a href="https://www.instagram.com/__tiopan.atelier" target="_blank" class="nav-link">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>
            </ul>

            <!-- Buscador -->
            <div class="w-100 mt-3">
                <form class="row gx-2 gy-2 align-items-center justify-content-center" role="search">
                    <div class="col-10 col-sm-8">
                        <input class="form-control w-100" type="search" placeholder="Buscar" aria-label="Buscar">
                    </div>
                    <div class="col-6 col-sm-3 col-md-2">
                        <button class="btn btn-outline-light w-100" type="submit">Buscar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</nav>
