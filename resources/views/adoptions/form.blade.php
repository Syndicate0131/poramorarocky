@extends('layouts.base')
@section('content')
<main class="content-form-adop">

<div class="form-head">
            <a href="{{ route('adoption.index') }}" class="icon-home" ><i class="bi bi-arrow-left-short"></i></a>
            <h1 class="title-form">Registrar Adoptante</h1>
        </div>
            <!-- Form -->
            <form action="{{ route('adoption.store') }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            <label for="numeroDocumento">Numero Documento: <span class="text-red">* <p>{{$errors->first('numeroDocumento') }}</p> </span></label>
            <input type="number" name="numeroDocumento">

            <label for="nombre">nombre: <span class="text-red">* <p>{{$errors->first('nombre') }}</p> </span></label>
            <input type="text" name="nombre">

            <label for="apellidos">Apellido: <span class="text-red">* <p>{{$errors->first('apellidos') }}</p> </span></label>
            <input type="text" name="apellidos">

            <label for="fechaNacimiento">Fecha de Nacimiento: <span class="text-red">* <p>{{$errors->first('fechaNacimiento') }}</p> </span></label>
            <input type="date" name="fechaNacimiento">

            <label for="numeroPersonasReside">N° Personas Residen: <span class="text-red">* <p>{{$errors->first('numeroPersonasReside') }}</p> </span></label>
            <input type="number" name="numeroPersonasReside">

            <label for="celular">N° Celular: <span class="text-red">* <p>{{$errors->first('celular') }}</p> </span></label>
            <input type="number" name="celular">

            <label for="correo">Email: <span class="text-red">* <p>{{$errors->first('correo') }}</p> </span></label>
            <input type="text" name="correo">

            <label for="direccion">Direccion de Hogar: <span class="text-red">* <p>{{$errors->first('direccion') }}</p> </span></label>
            <input type="text" name="direccion">

            <label for="sueldo">Ingresos Mensuales: <span class="text-red">* <p>{{$errors->first('sueldo') }}</p> </span></label>
            <input type="number" name="sueldo">

            <label for="empresaTrabaja">Nombre de Empresa: <span class="text-red">* <p>{{$errors->first('empresaTrabaja') }}</p> </span></label>
            <input type="text" name="empresaTrabaja">

            <label for="contactoEmpresa">Contacto Empresa: <span class="text-red">* <p>{{$errors->first('contactoEmpresa') }}</p> </span></label>
            <input type="text" name="contactoEmpresa">

            <label for="pet">Peludo a Vacunar: <span class="text-red">* <p>{{$errors->first('pet') }}</p> </span></label>
            <select name="pet" id="pet">
                <option value="" >Seleccione el peludo</option>
                    @foreach($pets as $pet)
                    <option value=" {{ $pet->id }} ">
                        {{ $pet->nombrePeludo }}
                    </option>
                    @endforeach
                </select>

            <label for="user">Usuario que Registra: <span class="text-red">* <p>{{$errors->first('user') }}</p> </span></label>
            <select name="user" id="user">
                <option value="" >Seleccione el usuario</option>
                    @foreach($users as $user)
                    <option value=" {{ $user->id }} ">
                        {{ $user->nombre }} {{ $user->apellido }}
                    </option>
                    @endforeach
                </select>

            <div class="button">
                    <button type="submit" class="ov-btn-slide-right" onclick="alertapeludoform();">
                       Registrar Peludo
                    </button>
            
            </div>
        </form>
</main>
@endsection
