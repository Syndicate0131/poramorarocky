@extends('layouts.base')
@section('content')
<main class="content-form">
<div class="form-head">
            <a href="{{ route('vaccine.index') }}" class="icon-home" ><i class="bi bi-arrow-left-short"></i></a>
            <h1 class="title-form">Actualizar Vacuna</h1>
        </div>
    <form action="{{ route('vaccine.update', $vacs->id) }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            @method('PUT')
            <label for="nombre">nombre: <span class="text-red">* <p>{{$errors->first('nombre') }}</p> </span></label>
            <input type="text" name="nombre" value="{{$vacs->nombreVacuna}}">


            


            <div class="button">

                    <button type="submit" class="ov-btn-slide-right" >
                      Actualizar Vacuna
                    </button>
            
            </div>
        </form>
</main>
@endsection
