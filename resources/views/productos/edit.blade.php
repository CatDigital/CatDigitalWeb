@extends('layout.index')

@section('contenido')
    <div class="container mt-5">
        <h1 class="mb-4">Editar Producto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.update', $producto) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nombre del Producto</label>
                <input type="text" name="nombre_producto" class="form-control"
                    value="{{ old('nombre_producto', $producto->nombre_producto) }}" required>
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number" name="stok" class="form-control" value="{{ old('stok', $producto->stok) }}"
                    required>
            </div>

            <div class="mb-3">
                <label>Precio</label>
                <input type="number" name="precio" class="form-control" value="{{ old('precio', $producto->precio) }}"required>
            </div>

            @if ($producto->img)
                <div class="mb-3">
                    <label>Imagen Actual:</label><br>
                    <img src="{{ asset('storage/' . $producto->img) }}" alt="Imagen actual" width="150"
                        class="rounded mb-3">
                </div>
            @endif

            <div class="mb-3">
                <label>Subir nueva Imagen</label>
                <input type="file" name="img" class="form-control">
            </div>

            <div class="mb-3">
                <label>Descripción</label>
                <textarea name="descripcion" class="form-control" rows="3">{{ old('descripcion', $producto->descripcion) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">💾 Guardar Cambios</button>
            <a href="{{ route('productos.index') }}" class="btn btn-outline-secondary">🔙 Cancelar</a>
        </form>
    </div>
@endsection
