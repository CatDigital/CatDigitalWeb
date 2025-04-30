@extends('layout.index')

@section('contenido')
    <div class="position-relative w-100 min-vh-100"
        style="background: url('{{ asset('img/fondo_productos.png') }}') center center / cover no-repeat fixed;">

        {{-- Capa oscura --}}
        <div class="position-absolute w-100 h-100 top-0 start-0" style="background-color: rgba(0, 0, 0, 0.5); z-index: 0;">
        </div>

        {{-- Contenido principal --}}
        <div class="position-relative z-1 contenido-productos" style="padding-top: 120px;">
            <div class="container text-center">
                <h1 class="titulo-producto text-white">Nuestros Productos</h1>

                <div class="d-flex flex-wrap justify-content-center gap-4 mt-4">
                    @foreach ($productos as $producto)
                        <div style="width: 250px;">
                            <div class="card h-100 shadow-lg"
                                style="background-color: rgba(255, 255, 255, 0.9); border-radius: 15px;">

                                @if ($producto->img)
                                    <img src="{{ asset('storage/' . $producto->img) }}" class="card-img-top"
                                        alt="{{ $producto->nombre_producto }}"
                                        style="height: 200px; object-fit: cover; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                                @else
                                    <img src="#" class="card-img-top" alt="Sin Imagen">
                                @endif

                                <div class="card-body d-flex flex-column text-center">
                                    <h5 class="card-title titulo-producto">{{ $producto->nombre_producto }}</h5>
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

        {{-- Estilos --}}
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Italianno&display=swap');

            .contenido-productos {
                padding-top: 120px;
            }

            .titulo-producto {
                font-family: 'Italianno', cursive;
                font-size: 4rem;
                text-align: center;
                text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
                margin-bottom: 1rem;
            }

            .card {
                height: auto;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                background-color: rgba(255, 255, 255, 0.9);
                border-radius: 15px;
            }

            .card:hover {
                transform: scale(1.02);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            }

            .card-title.titulo-producto {
                font-size: 2rem;
                margin-bottom: 0.5rem;
                text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
            }

            .card-body {
                padding: 1rem;
            }

            .btn-dark {
                font-size: 0.95rem;
                padding: 0.4rem 0.8rem;
            }
        </style>

    </div>
@endsection
