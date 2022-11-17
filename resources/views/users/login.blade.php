<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Por Amor a Rocky</title>
        <link rel="stylesheet" href="{{ asset('css/estilolog.css')}}">
        <!-- Link Swiper's CSS -->
    </head>

    
<body>
    <div class="main">

        <div class="container a-container" id="a-container">
        <form action="{{ route('login') }}" method="POST" class="form">
        @csrf
                <h2 class="form_title title">Inicia Sesión</h2>
                <label for="">Correo</label>
                <input type="text" placeholder="Email" class="form__input" name="correo" id="correo">
                <label for="">Contraseña</label>
                <input type="text" placeholder="Contraseña" class="form__input" name="clave" id="clave">
                @if (session('message'))
                 <p class="menerr">{{ session('message') }}</p>
                @endif
                <button class="form__button button submit" type="submit">INICIAR SESIÓN</button>
            </form>
        </div>
        <div class="switch" id="switch-cnt">
            <div class="switch__circle"></div>
            <div class="switch__circle switch__circle--t"></div>
            <div class="switch__container" id="switch-c1">
                <a href="/">
                    <img src="./images/logo.png" alt="" class="logo-head">
                </a>
                <h2 class="switch__title title">Bienvenido !</h2>
                <p class="switch__description description">Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
            </div>

        </div>
    </div>
    <script src="./js/jslog.js"></script>
</body>

</html>