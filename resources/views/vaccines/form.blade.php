@extends('layouts.base')
@section('content')
<main class="content-form">
<div class="form-head">
            <a href="{{ route('vaccine.index') }}" class="icon-home" ><i class="bi bi-arrow-left-short"></i></a>
            @auth
            <h1 class="title-form">Registrar Vacuna</h1>
        </div>
    <form action="{{ route('vaccine.store') }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            <label for="nombre">nombre: <span class="text-red">* <p>{{$errors->first('nombre') }}</p> </span></label>
            <input type="text" name="nombre">

            <div class="button">
                    <button type="submit" class="ov-btn-slide-right" onclick="return confirm('Esta seguro de realizar el registro? Esta sujeto a cambio por errores')">
                       Registrar Vacuna
                    </button>
            
            </div>
        </form>
        @endauth
          @guest
          <h1 style="margin: 100px; text-align: center; font-size:5rem;" class="form_title title">Usted no ha iniciado Sesión</h1>
          @endguest
</main>
@endsection
