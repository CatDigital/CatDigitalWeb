<nav class="navbar navbar-dark fixed-top navbar-custom">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('productos.listado') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Tio Pan Bakery">
            <span>Tio Pan Bakery</span>
        </a>

        <!-- Botones a la derecha -->
        <div class="d-flex align-items-center gap-3">
            <a href="https://www.instagram.com/__tiopan.atelier" target="_blank" class="instagram-icon">
                <i class="bi bi-instagram"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Menú lateral -->
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menú</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Cerrar"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <!-- Navegación -->
                    <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a></li>
                    
                    <!-- Dropdown Cuenta -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Administrador
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            
                            @if (Auth::check() && Auth::user()->Rol === 'admin')
                                <li>
                                  
                                    <a class="dropdown-item" href="{{ route('users.index') }}" >Administrar Usuarios</a></li>
                                    <a class="dropdown-item" href="{{ route('productos.index') }}" >Agregar producto</a></li>
                                </li>
        
                            @endif
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Cerrar sesión</a></li>
          
                </ul>


                <!-- Buscador -->
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</nav>
