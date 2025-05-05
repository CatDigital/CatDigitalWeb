@extends('layout.index')

@section('contenido')
    <div class="nosotros-bg w-100 py-5" style="min-height: 100vh;">
        <div class="container">
            @php
                $contenido = [
                    'Tío Pan Bakery nació de una receta familiar y una pasión por la calidad. Cada pan cuenta una historia hecha a mano.',
                    'Nuestra masa se fermenta lentamente durante 24 horas, logrando una textura única y un sabor inolvidable.',
                    'Cada producto es una obra de arte: usamos ingredientes frescos y técnicas heredadas de generaciones.',
                    'Creemos que la panadería debe ser un espacio cálido, como un hogar, donde se comparte el amor a través del pan.',
                    'Nuestro equipo mezcla talento técnico y pasión culinaria para reinventar la panadería del siglo XXI.',
                ];
            @endphp

            @for ($i = 1; $i <= 5; $i++)
                <div class="bloque-equipo {{ $i % 2 == 0 ? 'reverso' : '' }}"
                    data-aos="{{ $i % 2 == 0 ? 'fade-left' : 'fade-right' }}"
                    data-aos-delay="{{ $i * 200 }}">
                    <img src="{{ asset('img/foto' . $i . '.png') }}" alt="Imagen {{ $i }}" class="imagen-equipo">
                    <div class="texto-equipo">
                        <h4></h4>
                        <p>{{ $contenido[$i - 1] }}</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
