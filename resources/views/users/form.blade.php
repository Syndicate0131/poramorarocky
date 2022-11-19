<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Registro</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <main class="content-form">
        <div class="form-head">
            <a href="{{ route('usuario.index') }}" class="icon-home" ><i class="bi bi-arrow-left-short"></i></a>
            @auth
            @if(Auth::user()->tipoUsuario===1)
            <h1 class="title-form">REGISTRAR USUARIO</h1>
        </div>
        <form action="{{ route('usuario.store') }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            <label for="nombre">nombre: <span class="text-red">* <p>{{$errors->first('nombre') }}</p> </span></label>
            <input type="text" name="nombre">
            <label for="apellido">apellido: <span class="text-red">*<p>{{$errors->first('apellido') }}</p></span></label>
            <input type="text" name="apellido">
            <label for="correo">Correo: <span class="text-red">*<p>{{$errors->first('correo') }}</p></span></label>
            <input type="text" name="correo">
            <label for="numeroDocumento">Número de documento: <span class="text-red">*<p>{{$errors->first('numeroDocumento') }}</p></span></label>
            <input type="number" name="numeroDocumento" id="">
            <label for="telefono">Telefono: <span class="text-red">*<p>{{$errors->first('telefono') }}</p></span></label>
            <input type="tel" name="telefono" id="">
            <label for="clave">Contraseña: <span class="text-red">*<p>{{$errors->first('clave') }}</p></span></label>
            <input type="password" name="clave">
            <label for="foto">Foto:  <span class="text-red">*<p>{{$errors->first('foto') }}</p></span></label>
            <input type="file" name="foto" id="" accept="image/png, .jpeg, .jpg">
            <label for="tipoUsuario">Tipo de usuario: <span class="text-red">* <p>{{$errors->first('tipoUsuario') }}</p></span></label>
            <select class="select-rol" name="tipoUsuario" id="">
                <option value="">Seleccionar</option>
                <option value="1">Administrador</option>
                <option value="2">Director</option>
                <option value="3">Voluntario</option>
            </select>
            <div class="button">
                
                    <button type="submit" class="ov-btn-slide-right" onclick="return confirm('Esta seguro de realizar el registro? Esta sujeto a cambio por errores')">
                       Registrar Usuario
                    </button>
            
            </div>
        </form>
        @else
        <h1 style="margin: 100px; text-align: center; font-size:5rem;" class="form_title title">Usted No tiene Permiso En este modulo</h1>
        @endif
        @endauth
        @guest
        <h1 style="margin: 100px; text-align: center; font-size:5rem;" class="form_title title">Usted no ha iniciado Sesión</h1>
        @endguest
    </main>
</body>
</html>