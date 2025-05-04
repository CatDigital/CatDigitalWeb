{{--<style>
    .navbar-custom {
        background-color: #000;
        padding: 0.25rem 1rem;
    }

    .navbar-custom .navbar-brand {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-family: 'Italianno', cursive;
        color: white;
    }

    .navbar-custom .navbar-brand img {
        height: 60px;
        width: auto;
    }

    .navbar-custom .navbar-brand span {
        font-size: 2.1rem;
        line-height: 1;
        padding-top: 5px;
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

    .instagram-icon {
        font-size: 1.8rem;
        color: white;
        transition: all 0.3s ease;
    }

    .instagram-icon:hover {
        background: -webkit-linear-gradient(#feda75, #d62976, #962fbf, #4f5bd5);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        transform: scale(1.1);
    }
</style>--}}

<nav class="navbar navbar-dark fixed-top navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="/welcome">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Tio Pan Bakery">
            <span>Tio Pan Bakery</span>
        </a>

        <div class="d-flex align-items-center gap-3">
            <a href="https://www.instagram.com/__tiopan.atelier?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="instagram-icon">
                <i class="bi bi-instagram"></i>
            </a>
        
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        


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
                                <li>
                                    <a href="{{ route('users.index') }}" class="btn btn-success mt-3">
                                        👥 Administrar Usuarios
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>

                    <li class="nav-item mt-3">
                        <a href="{{ route('productos.index') }}" class="btn btn-success w-100">
                            Agregar producto
                        </a>
                    </li>
                </ul>

                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</nav>
