<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tio Pan Bakery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Importa el JS y CSS con Vite --}}
    @vite(['resources/js/app.js'])

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- AOS (Animate On Scroll) --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
</head>

<body>
    {{-- Navbar --}}
    @include('shared.navbar')

    {{-- Contenido --}}
    <main class="container-fluid p-0">
        @yield('contenido')
    </main>

    {{-- Scripts adicionales --}}
    @yield('scripts')
</body>
</html>
