@extends('layout.index')

@section('contenido')
    <div class="container mt-5">
        <h1 class="mb-4">Nuestros Productos</h1>

        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($productos as $producto)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        @if ($producto->img)
                            <img src="{{ asset('storage/' . $producto->img) }}" class="card-img-top"
                                alt="{{ $producto->nombre_producto }}" style="height: 200px; object-fit: cover;">
                        @else
                            <img src="#" class="card-img-top"
                                alt="Sin Imagen">
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $producto->nombre_producto }}</h5>

                            <h5 class="mt-auto text-success">${{ number_format($producto->precio, 0, ',', '.') }}</h5>

                            <a href="#" class="btn btn-dark mt-2">
                                🛒 Agregar al carrito
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
