@extends('layout.index')

@section('contenido')
    <div class="container mt-5">

        <h1 class="mb-4">Bienvenido, {{ Auth::user()->nombre_user }}</h1>

        {{-- Mostrar solo si el usuario es admin --}}
        @if (Auth::user()->Rol === 'admin')
            <div class="alert alert-primary">
                Eres administrador. Puedes agregar usuarios nuevos. 🎯
            </div>
        @endif

        {{-- Mostrar solo si el usuario es normal (user) --}}
        @if (Auth::user()->Rol === 'user')
            <div class="alert alert-info">
                Eres un usuario normal. Solo puedes ver información. 👀
            </div>
        @endif

    </div>

    <div>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Título del Cuadro de Texto</h5>
                <p class="card-text">
                    Este es el contenido que todos pueden ver, tanto usuarios como administradores.
                </p>

                <!-- Botón de Editar: Visible para todos -->
                <a href="#" class="btn btn-primary">✏️ Editar</a>

                <!-- Botón de Eliminar: Solo visible para admins -->
                @if (Auth::user()->Rol === 'admin')
                    <form action="#" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">❌ Eliminar</button>
                    </form>
                @endif

            </div>
        </div>



    </div>
@endsection
