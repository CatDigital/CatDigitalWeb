@extends('layout.index')

@section('contenido')
   
<style>
        /* Tipografía */
        .titulo-seccion {
            font-family: 'Italianno', cursive;
            font-size: 5rem;
            line-height: 1.2;
        }

        .lead {
            font-family: 'Italianno', cursive;
            font-size: 2.8rem;
            color: #5c5c5c;
        }

        .texto-equipo h4 {
            font-family: 'Italianno', cursive;
            font-size: 3rem;
        }

        .texto-equipo p {
            font-family: 'Italianno', cursive;
            font-size: 2.1rem;
            line-height: 1.8;
        }

        h1,
        h2,
        h3,
        h5,
        h6 {
            font-family: 'Italianno', cursive;
            font-size: 2.5rem;
        }

        /* Contenedor de bloques */
        .bloque-equipo {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
            margin: 60px 0;
            flex-wrap: wrap;
            perspective: 1000px;
        }

        .bloque-equipo.reverso {
            flex-direction: row-reverse;
        }

        .imagen-equipo {
            width: 100%;
            max-width: 420px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.8s ease, box-shadow 0.4s ease;
            transform-style: preserve-3d;
            transform-origin: center;
        }

        .imagen-equipo:hover {
            transform: rotateX(8deg) rotateZ(8deg) scale(1.02);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
        }

        .texto-equipo {
            flex: 1;
            min-width: 250px;
        }

        @media (max-width: 768px) {

            .bloque-equipo,
            .bloque-equipo.reverso {
                flex-direction: column;
                text-align: center;
            }

            .titulo-seccion {
                font-size: 3.5rem;
            }

            .lead {
                font-size: 2rem;
            }

            .texto-equipo h4 {
                font-size: 2.3rem;
            }

            .texto-equipo p {
                font-size: 1.7rem;
            }
        }
    </style>

    <div class="container py-5" style="min-height: 100vh;">
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
                data-aos="{{ $i % 2 == 0 ? 'fade-left' : 'fade-right' }}" data-aos-delay="{{ $i * 200 }}">
                <img src="{{ asset('img/foto' . $i . '.png') }}" alt="Imagen {{ $i }}" class="imagen-equipo">
                <div class="texto-equipo">
                    <h4 class="text-primary"></h4>
                    <p>{{ $contenido[$i - 1] }}</p>
                </div>
            </div>
        @endfor
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 600,
            once: true,
            offset: 300,
            easing: 'ease-in-out'
        });

        window.addEventListener('load', AOS.refresh); // fuerza el refresco cuando todo está cargado
    </script>
@endsection
