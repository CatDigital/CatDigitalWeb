@extends('layout.index')

@section('contenido')
    <div class="container">
        <h1>Lista de Usuarios</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">➕ Nuevo Usuario</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
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
                            <a href="{{ route('users.edit', $usuario->id_user) }}" class="btn btn-sm btn-primary">✏️
                                Editar</a>
                            <form action="{{ route('users.destroy', $usuario->id_user) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Estás seguro de eliminar?')">❌ Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
