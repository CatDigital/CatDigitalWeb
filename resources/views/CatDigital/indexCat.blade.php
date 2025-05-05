<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Landing Page')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">

    <!--@ vite(['resources/css/CatDigital/indexCat.css', 'resources/js/CatDigital/indexCat.js']) -->
    <style>
        .logo-container {
            width: 5rem;
            /* o un ancho fijo como 300px */
            max-width: 5rem;
            margin: 0 auto;
            /* centrado */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-container img {
            width: 100%;
            height: auto;
            object-fit: contain;
            display: block;
        }

        .navbar-custom {
            background-color: #0c0b28;
            padding: 1rem 2rem;
            border-radius: 20px;
            margin: 1.5rem auto;
            max-width: 70%;
            box-shadow: 0 0 20px rgba(154, 78, 255, 0.2);
        }

        .navbar-brand {
            color: white;
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: 1px;
            transition: color 0.3s ease;
        }

        .navbar-brand:hover {
            color: #00ffe7 !important;
        }

        .nav-link {
            color: white !important;
            font-weight: 500;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #00ffe7 !important;
        }

        .btn-login {
            padding: 0.6rem 1.5rem;
            border: 2px solid #00ffe7;
            border-radius: 12px;
            color: white;
            background-color: transparent;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 0 10px rgba(0, 255, 231, 0.3);
        }

        .btn-login:hover {
            background-color: #00ffe7;
            color: #000;
            box-shadow: 0 0 20px #00ffe7, 0 0 40px #00ffe7 inset;
        }


        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' fill='white' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .navbar-shadow {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .rosamel {
            font-family: 'Fredericka the Great', cursive;
            font-size: 2.5rem;
            color: #ffffff;
            text-align: top;
            margin-top: 0px;
            font-weight: normal;
            /* esta fuente ya tiene estilo decorativo */
        }

        .rosamel:hover {
            color: #00ffe7 !important;
        }





        /* Estilos generales */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #000428, #004e92);
            color: white;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        .hero-header {
            position: relative;
            height: 100vh;
            background: url("/img/azula.jpg") center center / cover no-repeat fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
        }


        .hero-content {
            position: relative;
            z-index: 2;
            color: #fff;
            padding: 20px;
            max-width: 900px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            animation: slide-in 1.2s ease-out forwards;
            opacity: 0;
        }

        .hero-content p {
            font-size: 1.3rem;
            color: #ddd;
            margin-bottom: 30px;
            animation: fade-in 2s ease-out forwards;
            opacity: 0;
        }

        .hero-content .highlight {
            color: #00ffe7;
            font-weight: bold;
        }

        .btn-hero {
            display: inline-block;
            padding: 14px 35px;
            border-radius: 40px;
            font-weight: bold;
            text-decoration: none;
            color: #000;
            background: linear-gradient(135deg, #00ffe7, #00b5ff);
            box-shadow: 0 4px 20px rgba(0, 255, 231, 0.4);
            transition: all 0.3s ease;
            animation: fade-in 2.5s ease-out forwards;
            opacity: 0;
        }

        .btn-hero:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 255, 231, 0.6);
            color: #111;
        }

        /* Animaciones personalizadas */
        @keyframes slide-in {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }


        /* Sección de servicios */
        .top {
            margin-top: 7rem;
        }

        .servicios {
            padding: 80px 20px;
            /* background-color: #0f2027; */
            height: 100vh;
            background: url("/img/azul.jpg") top center / cover no-repeat fixed;

        }

        .servicios h2 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
        }

        .card-servicio {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 30px;
            margin: 20px;
            text-align: center;
            transition: transform 0.5s ease, background 0.3s;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .card-servicio:hover {
            transform: scale(1.07) rotate(-1deg);
            background: rgba(255, 255, 255, 0.1);
        }

        .card-servicio i {
            font-size: 3.5rem;
            color: #00ffe7;
            margin-bottom: 15px;
        }





        /* Galería de proyectos */
        .topgaleri {
            margin-top: 7rem;
        }

        .galeria {
            width: 100%;
            height: 100vh;
            background: url("/img/azula.jpg") top center / cover no-repeat fixed;
            padding: 100px 20px;
            text-align: center;
            color: white;
            position: relative;
        }

        .galeria-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .galeria-item {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .galeria-item:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.6);
        }

        .galeria-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
            display: block;
            transition: transform 0.6s ease;
        }

        .galeria-item:hover img {
            transform: scale(1.08) rotate(1deg);
        }

        /* Overlay caption */
        .galeria-caption {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            padding: 20px;
            color: #00ffe7;
            font-weight: bold;
            font-size: 1.1rem;
            opacity: 0;
            transform: translateY(100%);
            transition: all 0.5s ease;
            z-index: 2;
        }

        .galeria-item:hover .galeria-caption {
            opacity: 1;
            transform: translateY(0);
        }




        /* Sección de contacto */
        .contacto {
            position: relative;
            padding: 100px 20px;
            background: url("/img/pccolor.jpg") top center / cover no-repeat fixed;
            text-align: center;
            color: white;
            overflow: hidden;
        }

        .contacto-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(4px);
            z-index: 1;
        }

        .contacto-contenido {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .contacto h2 {
            margin-bottom: 30px;
            font-size: 3rem;
            font-weight: 800;
            color: #00ffe7;
            text-shadow: 0 0 15px rgba(0, 255, 231, 0.5);
        }

        .contacto p {
            font-size: 1.3rem;
            margin-bottom: 40px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .contacto a {
            display: inline-block;
            padding: 12px 36px;
            border-radius: 30px;
            font-weight: bold;
            font-size: 1.1rem;
            color: #000;
            background: linear-gradient(135deg, #00ffe7, #ff00ff);
            box-shadow: 0 0 15px rgba(0, 255, 231, 0.4);
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .contacto a:hover {
            background: linear-gradient(135deg, #ff00ff, #00ffe7);
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(0, 255, 231, 0.7), 0 0 40px #ff00ff;
        }


        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.4);
            font-size: 0.9rem;

        }
    </style>
</head>

<body>

    @include('Catdigital.shared.barra')

    @yield('contenidot')


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: ::contentReference[oaicite: 1] {
                    index = 1
                }

                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    </script>
</body>

</html>
