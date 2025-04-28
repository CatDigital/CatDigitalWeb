@extends('layout.index')

@section('contenido')
    <div class="container">
        <h1>Editar Usuario</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.update', $user->id_user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="nombre_user" class="form-control"
                    value="{{ old('nombre_user', $user->nombre_user) }}" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="mb-3">
                <label>Rol</label>
                <select name="Rol" class="form-control" required>
                    <option value="user" {{ $user->Rol == 'user' ? 'selected' : '' }}>Usuario</option>
                    <option value="admin" {{ $user->Rol == 'admin' ? 'selected' : '' }}>Administrador</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Teléfono</label>
                <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $user->telefono) }}">
            </div>

            <div class="mb-3">
                <label>Dirección</label>
                <input type="text" name="direccion" class="form-control"
                    value="{{ old('direccion', $user->direccion) }}">
            </div>

            <button class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
