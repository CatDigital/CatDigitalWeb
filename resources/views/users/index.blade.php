@extends('layout.index')

@section('contenido')
    @vite('resources/css/Tiopan/usuarios.css')

    <div class="usuario-wrapper">
        <div class="container contenido-usuarios">
            <h1 class="titulo-usuarios">Lista de Usuarios</h1>
            <a href="{{ route('users.create') }}" class="btn btn-crear">➕ Nuevo Usuario</a>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table tabla-usuarios table-bordered table-hover text-white">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nombre_user }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->Rol }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $usuario->id_user) }}" class="btn btn-editar">✏️
                                        Editar</a>
                                    <form action="{{ route('users.destroy', $usuario->id_user) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-eliminar"
                                            onclick="return confirm('¿Estás seguro de eliminar?')">❌ Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
