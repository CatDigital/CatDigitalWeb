@extends('layout.index')

@section('contenido')
    @vite('resources/css/Tiopan/listado_index.css')

    <div class="fondo-productos" style="--fondo-img: url('{{ asset('img/fondo_productos.png') }}')">
        <div class="contenido-productos">
            <!-- Título -->
            <h1 class="titulo-italianno text-center">Nuestros Productos</h1>

            <!-- Productos -->
            <div class="row justify-content-center m-0">
                @foreach ($productos as $producto)
                    <div class="producto-card-wrapper">
                        <div class="producto-card" data-aos="zoom-in" data-aos-delay="100">
                            <!-- Imagen -->
                            <div class="producto-img-container">
                                @if($producto->img)
                                    <img src="{{ asset('storage/'.$producto->img) }}" 
                                         class="producto-img"
                                         alt="{{ $producto->nombre_producto }}">
                                @else
                                    <div class="bg-secondary h-100 d-flex align-items-center justify-content-center">
                                        <span class="text-white">Imagen no disponible</span>
                                    </div>
                                @endif
                            </div>

                            <!-- Info -->
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre_producto }}</h5>
                                <h4 class="precio-italianno mb-3">
                                    ${{ number_format($producto->precio, 0, ',', '.') }}
                                </h4>
                                <button class="btn btn-agregar">
                                     Agregar al carrito
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        AOS.init();
    </script>
@endsection
