@extends('layouts.base')
@section('content')
<main class="content-form">
<div class="form-head">
            <a href="{{ route('pet.index') }}" class="icon-home" ><i class="bi bi-arrow-left-short"></i></a>
            @auth
            <h1 class="title-form">Actualizar Peludo</h1>
        </div>
    <form action="{{ route('pet.update', $pets->id) }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            @method('PUT')
            <label for="nombre">nombre: <span class="text-red">* <p>{{$errors->first('nombre') }}</p> </span></label>
            <input type="text" name="nombre" value="{{$pets->nombrePeludo}}">

            <label for="edad">edad: <span class="text-red">*<p>{{$errors->first('edad') }}</p></span></label>
            <input type="number" name="edad" value="{{$pets->edad}}">

            <label for="user">Usuario que Registra: <span class="text-red">* <p>{{$errors->first('user') }}</p> </span></label>
            <select name="user" id="user">
                <option value="" >Seleccione el usuario</option>
                    @foreach($users as $user)
                    <option value=" {{ $user->id }} ">
                        {{ $user->nombre }} {{ $user->apellido }}
                    </option>
                    @endforeach
                </select>

            <label for="desc">Descripcion Salud: <span class="text-red">*<p>{{$errors->first('desc') }}</p></span></label>
            <input type="longtext" name="desc" value="{{$pets->descripcionSalud}}">

            <label for="raza">raza: <span class="text-red">* <p>{{$errors->first('raza') }}</p> </span></label>
            <input type="text" name="raza"value="{{$pets->raza}}">

            <label for="zona">zona: <span class="text-red">* <p>{{$errors->first('zona') }}</p> </span></label>
            <input type="text" name="zona" value="{{$pets->zonaVivienda}}">

            <label for="est">estadoPeludo: <span class="text-red">* <p>{{$errors->first('est') }}</p> </span></label>
            <input type="text" name="est" value="{{$pets->estadoPeludo}}">
            


            <div class="button">

                    <button type="submit" class="ov-btn-slide-right" onclick="return confirm('Esta seguro de actualizar el registro? Esta sujeto a cambio por errores')">
                      Actualizar Peludo
                    </button>
            
            </div>
        </form>
        @endauth
        @guest
        <h1 style="margin: 100px; text-align: center; font-size:5rem;" class="form_title title">Usted no ha iniciado Sesión</h1>
        @endguest
</main>
@endsection
