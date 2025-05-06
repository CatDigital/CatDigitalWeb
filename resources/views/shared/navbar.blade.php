<nav class="navbar navbar-dark navbar-expand-lg fixed-top navbar-custom">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('productos.listado') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Tio Pan Bakery">
            <span class="brand-text">Tio Pan Bakery</span>
        </a>

        <!-- Contenido del navbar -->
        <div class="d-flex align-items-center flex-grow-1 justify-content-end">
            <ul class="navbar-nav mb-0 d-flex align-items-center gap-3">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
                </li>

                @if (Auth::check() && Auth::user()->Rol === 'admin')
                    <li class="nav-item dropdown position-relative">
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
                    <a class="nav-link" href="{{ route('logout') }}">Cerrar sesión</a>
                </li>

                <!-- Instagram -->
                <li class="nav-item">
                    <a href="https://www.instagram.com/__tiopan.atelier" target="_blank" class="instagram-icon">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>
            </ul>

            <!-- Buscador -->
            <form class="d-flex ms-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
