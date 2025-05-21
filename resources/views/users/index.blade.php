@extends('layout.index')

@section('contenido')
    @vite('resources/css/Tiopan/usuarios.css')

    <div class="usuario-wrapper">
        <div class="container contenido-usuarios">
            <h1 class="titulo-usuarios">
                <span class="fuente-italianno">Lista de Usuarios</span>
            </h1>

            <a href="{{ route('users.create') }}" class="btn btn-crear">➕ Nuevo Usuario</a>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive mt-4">
                <table class="table tabla-usuarios">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nombre_user }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->Rol }}</td>
                                <td>
                                    <div class="acciones">
                                        <a href="{{ route('users.edit', $usuario->id_user) }}" class="btn btn-editar" title="Editar">
                                            ✏️
                                        </a>
                                        <form action="{{ route('users.destroy', $usuario->id_user) }}" method="POST" onsubmit="return confirm('¿Eliminar este usuario?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-eliminar" title="Eliminar">
                                                🗑️
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No hay usuarios registrados.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
