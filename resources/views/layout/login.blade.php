<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Tío Pan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/login.js')
</head>

<body class="login-body">
    <div class="login-container">
        <div class="login-card">
            <h2 class="login-title">Iniciar Sesión</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('logear') }}" method="POST" class="login-form">
                @csrf

                <label for="email">Correo electrónico</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="usuario@ejemplo.com">

                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required placeholder="********">

                <button type="submit">Ingresar</button>

                <div class="forgot">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
