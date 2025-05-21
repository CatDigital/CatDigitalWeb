@extends('layout.index')

@section('contenido')
    @vite('resources/css/Tiopan/index_productos.css')
    
    <div class="container mt-5 contenido-usuarios">
        <h1 class="mb-4 fuente-italianno titulo-usuarios">Lista de Productos</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('productos.create') }}" class="btn-add">➕ Agregar Producto</a>

        <table class="table tabla-usuarios table-bordered table-hover">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>STOCK</th>
                    <th>PRECIO</th>
                    <th>IMAGEN</th>
                    <th>DESCRIPCIÓN</th>
                    <th>ACCIONES</th>
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
                                <img src="{{ asset('storage/' . $producto->img) }}" alt="Imagen" class="img-producto">
                            @else
                                Sin imagen
                            @endif
                        </td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>
                            <div class="botones-acciones">
                                <a href="{{ route('productos.edit', $producto->id_producto) }}" class="btn-icon btn-primary" title="Editar">
                                    ✏️
                                </a>
                                <form action="{{ route('productos.destroy', $producto->id_producto) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar este producto?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-icon btn-danger" title="Eliminar">❌</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
