@extends('layouts.base')
@section('content')
<main class="content-form">
<div class="form-head">
            <a href="{{ route('usuario.index') }}" class="icon-home" ><i class="bi bi-arrow-left-short"></i></a>
            @auth
            @if(Auth::user()->tipoUsuario===1)
            <h1 class="title-form">ACTUALIZAR USUARIO</h1>
        </div>
    <form action="{{ route('usuario.update', $users->id) }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            @method('PUT')
            <label for="id">Id Usuario: <span class="text-red"></span></label>
            <input type="text" name="id" value="{{$users->id}}" readonly>

            <label for="numeroDocumento">Número de documento: <span class="text-red">*<p>{{$errors->first('numeroDocumento') }}</p></span></label>
            <input type="number" name="numeroDocumento" value="{{$users->numeroDocumento}}">

            <label for="nombre">nombre: <span class="text-red">* <p>{{$errors->first('nombre') }}</p> </span></label>
            <input type="text" name="nombre" value="{{$users->nombre}}">

            <label for="apellido">apellido: <span class="text-red">*<p>{{$errors->first('apellido') }}</p></span></label>
            <input type="text" name="apellido" value="{{$users->apellido}}">

            <label for="correo">Correo: <span class="text-red">*<p>{{$errors->first('correo') }}</p></span></label>
            <input type="text" name="correo" value="{{$users->correo}}">

            <label for="telefono">Telefono: <span class="text-red">*<p>{{$errors->first('telefono') }}</p></span></label>
            <input type="tel" name="telefono" value="{{$users->telefono}}">

            <label for="clave">Contraseña: <span class="text-red">*<p>{{$errors->first('clave') }}</p></span></label>
            <input type="password" name="clave" value="{{$users->clave}}">

            <label for="tipoUsuario">Tipo de usuario:             
            @if($users->tipoUsuario =='1')  
            <p>Rol Actual: Administrador</p>
            @elseif ($users->tipoUsuario =='2')  
            <p>Rol Actual: Director</p>  
            @else  
            <p>Rol Actual: Voluntario</p>        
            @endif <span class="text-red">* <p>{{$errors->first('tipoUsuario') }}</p></span></label>
            <select class="select-rol" name="tipoUsuario" >
                <option value="">Seleccionar</option>
                <option value="1">Administrador</option>
                <option value="2">Director</option>
                <option value="3">Voluntario</option>
            </select>


            <div class="button">

                    <button type="submit" class="ov-btn-slide-right" >
                      Actualizar Vacuna
                    </button>
            
            </div>
        </form>
        @else
        <h1 style="margin: 100px; text-align: center; font-size:5rem;" class="form_title title">Usted No tiene Permiso En este modulo</h1>
        @endif
        @endauth

        @guest
        <h1 style="margin: 100px; text-align: center; font-size:5rem;" class="form_title title">Usted no a iniciado Sesión</h1>
        @endguest
        </main>
@endsection
