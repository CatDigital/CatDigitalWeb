@extends('layout.index')

@section('contenido')
    <style>
        body {
            background: url('{{ asset('img/fondo.png') }}') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            /* Oscurece un poco el fondo */
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            border-radius: 20px;
        }

        .btn-custom {
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-custom:hover {
            transform: scale(1.05);
        }
    </style>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="overlay text-center">
            <h1 class="display-3 fw-bold mb-4">🚀 Bienvenido a la Intranet 🚀</h1>
            <p class="lead mb-5">
                Tu plataforma central para módulos, tareas y herramientas internas.
            </p>

            <div class="d-flex justify-content-center gap-4">
                <a class="btn btn-primary btn-lg btn-custom" href='{{ route('productos.listado') }}'>Productos</a>
                <a href="/pruebas" class="btn btn-primary btn-lg btn-custom"> Ir a Pruebas</a>
            </div>
        </div>
    </div>
@endsection
