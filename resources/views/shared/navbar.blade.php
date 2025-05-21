
<nav class="navbar navbar-dark navbar-expand-lg fixed-top navbar-custom">
    <div class="container-fluid d-flex justify-content-between align-items-center px-3">
        <!-- Izquierda: logo y nombre -->
        <a class="navbar-brand d-flex align-items-center m-0" href="{{ route('productos.listado') }}"
            style="max-width: 75%;">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Tio Pan Bakery" style="height: 40px;">
            <span class="brand-text ms-2 text-truncate" style="white-space: nowrap;">Tio Pan Bakery</span>
        </a>

        <!-- Derecha: botón hamburguesa -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <!-- Menú colapsable -->
    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto align-items-center gap-3">
            <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a></li>

            @if (Auth::check() && Auth::user()->Rol === 'admin')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Administrador
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{ route('users.index') }}">Usuarios</a></li>
                        <li><a class="dropdown-item" href="{{ route('productos.index') }}">Productos</a></li>
                    </ul>
                </li>
            @endif

            <li class="nav-item">
                <a href="#" class="nav-link" style="white-space: nowrap;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar sesión
                </a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

            <li class="nav-item">
                <a href="https://www.instagram.com/__tiopan.atelier" target="_blank" class="nav-link">
                    <i class="bi bi-instagram fs-5"></i>
                </a>
            </li>
        </ul>

        <!-- Buscador reducido -->
        <form class="d-flex ms-4 search-bar" role="search">
            <input class="form-control form-control-sm me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-sm btn-outline-light" type="submit">Buscar</button>
        </form>
    </div>
    </div>
</nav>
