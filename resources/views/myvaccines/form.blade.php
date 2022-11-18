@extends('layouts.base')
@section('content')
<main class="content-form">
<div class="form-head">
            <a href="{{ route('myvaccine.index') }}" class="icon-home" ><i class="bi bi-arrow-left-short"></i></a>
            @auth
            <h1 class="title-form">Registrar Mi Vacuna</h1>
        </div>
    <form action="{{ route('myvaccine.store') }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            <label for="fecha">Fecha: <span class="text-red">* <p>{{$errors->first('fecha') }}</p> </span></label>
            <input type="date" name="fecha">

            <label for="pet">Peludo a Vacunar: <span class="text-red">* <p>{{$errors->first('pet') }}</p> </span></label>
            <select name="pet" id="pet">
                <option value="" >Seleccione el peludo</option>
                    @foreach($pets as $pet)
                    <option value=" {{ $pet->id }} ">
                        {{ $pet->nombrePeludo }}
                    </option>
                    @endforeach
                </select>

                <label for="vaccine">Vacuna inyectada: <span class="text-red">* <p>{{$errors->first('vaccine') }}</p> </span></label>
            <select name="vaccine" id="vaccine">
                <option value="" >Seleccione la vacuna</option>
                    @foreach($vacs as $vac)
                    <option value=" {{ $vac->id }} ">
                        {{ $vac->nombreVacuna }}
                    </option>
                    @endforeach
                </select>
        

            


            <div class="button">
                    <button type="submit" class="ov-btn-slide-right" onclick="alertapeludoform();">
                       Registrar Mi Vacuna
            
            </div>
        </form>
        @endauth
        @guest
        <h1 style="margin: 100px; text-align: center; font-size:5rem;" class="form_title title">Usted no a iniciado Sesión</h1>
        @endguest
</main>
@endsection
