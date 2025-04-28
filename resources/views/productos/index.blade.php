@extends('layout.index')

@section('contenido')
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Productos</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('productos.create') }}" class="btn btn-success mb-3">➕ Agregar Producto</a>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre_producto }}</td>
                        <td>{{ $producto->stok }}</td>
                        <td>${{ $producto->precio }}</td>
                        <td>
                            @if ($producto->img)
                                <img src="{{ asset('storage/' . $producto->img) }}" alt="Imagen" width="80">
                            @else
                                Sin imagen
                            @endif
                        </td>
                        <td>{{ $producto->descripcion }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('productos.edit', $producto->id_producto) }}"
                                class="btn btn-primary btn-sm">✏️ Editar</a>
                            <form action="{{ route('productos.destroy', $producto->id_producto) }}" method="POST"
                                onsubmit="return confirm('¿Seguro que quieres eliminar este producto?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">❌ Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
