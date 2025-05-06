@extends('layout.index')

@section('contenido')
    @vite(['resources/js/app.js'])
    <div class="usuario-wrapper">
        <div class="contenido-usuarios">
            <h1 class="titulo-usuarios">Crear Usuario</h1>
    
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
    
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre_user" class="form-control formulario-input" value="{{ old('nombre_user') }}" required>
                </div>
    
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control formulario-input" value="{{ old('email') }}" required>
                </div>
    
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control formulario-input" required>
                </div>
    
                <div class="form-group">
                    <label>Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control formulario-input" required>
                </div>
    
                <div class="form-group">
                    <label>Rol</label>
                    <select name="Rol" class="form-control formulario-input" required>
                        <option value="">-- Selecciona un rol --</option>
                        <option value="user" {{ old('Rol') == 'user' ? 'selected' : '' }}>Usuario</option>
                        <option value="admin" {{ old('Rol') == 'admin' ? 'selected' : '' }}>Administrador</option>
                    </select>
                </div>
    
                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="text" name="telefono" class="form-control formulario-input" value="{{ old('telefono') }}">
                </div>
    
                <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" name="direccion" class="form-control formulario-input" value="{{ old('direccion') }}">
                </div>
    
                <div class="botones-form">
                    <button class="btn btn-success btn-crear">Guardar</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    
@endsection
