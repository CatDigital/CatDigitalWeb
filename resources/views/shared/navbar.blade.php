<style>
    .navbar-custom {
        background-color: #000;
        /* Negro puro */
        padding: 0.25rem 1rem;
        /* Altura reducida */
    }

    .navbar-custom .navbar-brand {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: white;
        font-family: 'Italianno', cursive;
    }

    .navbar-custom .navbar-brand img {
        height: 60px;
        width: auto;
    }

    .navbar-custom .navbar-brand span {
        font-size: 2.1rem;
        padding-top: 5px;
        /* <- Esto corrige el desalineado */
        line-height: 1;
    }

    .navbar-custom .nav-link,
    .navbar-custom .dropdown-toggle {
        font-size: 1rem;
        color: #fff;
    }

    .navbar-custom .nav-link:hover,
    .navbar-custom .dropdown-toggle:hover {
        color: #28a745;
    }

    .navbar-custom .dropdown-menu-dark {
        background-color: #111;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
</style>

<nav class="navbar navbar-dark fixed-top navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="/welcome">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Tio Pan Bakery">
            <span>Tio Pan Bakery</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Nosotros</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Proyectos</a></li>
                    <li>
                        <a href="{{ route('productos.index') }}" class="btn btn-success mt-4">Agregar producto</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Servicios</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Tu web</a></li>
                            <li><a class="dropdown-item" href="#">Tu tienda Online</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Tu blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Cuenta</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Cerrar sesión</a></li>
                            @if (Auth::user()->Rol === 'admin')
                                <a href="{{ route('users.index') }}" class="btn btn-success mt-4">👥 Administrar
                                    Usuarios</a>
                            @endif
                        </ul>
                    </li>
                </ul>
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</nav>
