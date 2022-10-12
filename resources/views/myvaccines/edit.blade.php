@extends('layouts.base')
@section('content')
<main class="content-form">
<div class="form-head">
            <a href="{{ route('myvaccine.index') }}" class="icon-home" ><i class="bi bi-arrow-left-short"></i></a>
            <h1 class="title-form">Actualizar Mi Peludo</h1>
        </div>
    <form action="{{ route('myvaccine.update', $myvacs->id) }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            @method('PUT')
            <label for="fecha">Fecha: <span class="text-red">* <p>{{$errors->first('fecha') }}</p> </span></label>
            <input type="date" name="fecha" value="{{$myvacs->fechaVacuna}}">

            <label for="pet">Id Peludo: <span class="text-red">*<p>{{$errors->first('pet') }}</p></span></label>
            <input type="number" name="pet" value="{{$myvacs->pets_id}}">

            <label for="vaccine">Id Vacuna: <span class="text-red">*<p>{{$errors->first('vaccine') }}</p></span></label>
            <input type="number" name="vaccine" value="{{$myvacs->vaccines_id}}">

            <div class="button">

                    <button type="submit" class="ov-btn-slide-right" >
                      Actualizar Mi vacuna
                    </button>
            
            </div>
        </form>
</main>
@endsection
