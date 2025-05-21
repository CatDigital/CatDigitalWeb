@extends('layout.index')

@section('contenido')
    @vite('resources/css/Tiopan/listado_index.css')

    <div class="usuario-wrapper">
        <div class="contenido-usuarios">
            <h1 class="titulo-usuarios">Crear Usuario</h1>

            {{-- Mensajes de error --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Formulario --}}
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nombre_user">Nombre</label>
                    <input type="text" id="nombre_user" name="nombre_user" class="formulario-input"
                        value="{{ old('nombre_user') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="formulario-input" value="{{ old('email') }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" class="formulario-input" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirmar Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="formulario-input"
                        required>
                </div>

                <div class="form-group">
                    <label for="Rol">Rol</label>
                    <select id="Rol" name="Rol" class="formulario-input" required>
                        <option value="">-- Selecciona un rol --</option>
                        <option value="user" {{ old('Rol') == 'user' ? 'selected' : '' }}>Usuario</option>
                        <option value="admin" {{ old('Rol') == 'admin' ? 'selected' : '' }}>Administrador</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" class="formulario-input"
                        value="{{ old('telefono') }}">
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion" class="formulario-input"
                        value="{{ old('direccion') }}">
                </div>

                <div class="botones-form">
                    <button type="submit" class="boton-form btn-crear">Guardar</button>
                    <button type="button" onclick="window.location='{{ route('users.index') }}'"
                        class="boton-form btn-cancelar">Cancelar</button>
                </div>



            </form>
        </div>
    </div>
@endsection
