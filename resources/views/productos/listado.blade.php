@extends('layout.index')

@section('contenido')
    <div class="position-relative w-100 min-vh-100"
        style="background: url('{{ asset('img/fondo_productos.png') }}') center center / cover no-repeat fixed;">

        {{-- Capa oscura --}}
        <div class="position-absolute w-100 h-100 top-0 start-0" style="background-color: rgba(0,0,0,0.5);"></div>

        {{-- Contenido de productos --}}
        <div class="position-relative z-1 d-flex flex-column align-items-center justify-content-center min-vh-100">
            <div class="container">
                <h1 class="text-white text-center mb-5">Nuestros Productos</h1>

                <div class="d-flex flex-wrap justify-content-center gap-4">
                    @foreach ($productos as $producto)
                        <div style="width: 250px;">
                            <div class="card h-100 shadow-lg"
                                style="background-color: rgba(255, 255, 255, 0.8); border-radius: 15px;">

                                @if ($producto->img)
                                    <img src="{{ asset('storage/' . $producto->img) }}" class="card-img-top"
                                        alt="{{ $producto->nombre_producto }}"
                                        style="height: 200px; object-fit: cover; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                                @else
                                    <img src="#" class="card-img-top" alt="Sin Imagen">
                                @endif

                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $producto->nombre_producto }}</h5>
                                    <h5 class="mt-auto text-success">
                                        ${{ number_format($producto->precio, 0, ',', '.') }}
                                    </h5>

                                    <a href="#" class="btn btn-dark mt-2">
                                        🛒 Agregar al carrito
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <style>
            .card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .card:hover {
                transform: scale(1.02);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            }
        </style>

    </div>
@endsection
