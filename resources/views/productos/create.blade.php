@extends('layout.index')

@section('contenido')
    <div class="container mt-5">
        <h1 class="mb-4">Agregar Producto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label>Nombre del Producto</label>
                <input type="text" name="nombre_producto" class="form-control" value="{{ old('nombre_producto') }}"
                    required>
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number" name="stok" class="form-control" value="{{ old('stok') }}" required>
            </div>

            <div class="mb-3">
                <label>Precio</label>
                <input type="number" name="precio" class="form-control" value="{{ old('precio') }}" required>
            </div>

            <div class="mb-3">
                <label>Ruta o nombre de Imagen</label>
                <input type="file" name="img" class="form-control" value="{{ old('img') }}">
            </div>

            <div class="mb-3">
                <label>Descripción</label>
                <textarea name="descripcion" class="form-control" rows="3">{{ old('descripcion') }}</textarea>
            </div>

            <button class="btn btn-success">Guardar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
