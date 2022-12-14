@extends('layouts.base')
@section('content')
<main class="content-form">
<div class="form-head">
            <a href="{{ route('adoption.index') }}" class="icon-home" ><i class="bi bi-arrow-left-short"></i></a>
            <h1 class="title-form">Actualizar Estado Caso de Aopcion</h1>
        </div>
    <form action="{{ route('adoption.update', $adoptions->id) }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            @method('PUT')
            <label for="Id"> Adopcion: <span class="text-red"></span></label>
            <input type="number" name="Id" value="{{$adoptions->id}}" readonly>



            <label for="pet">Id Peludo: <span class="text-red">*<p>{{$errors->first('pet') }}</p></span></label>
            <input type="number" name="pet" value="{{$adoptions->pet_id}}" readonly>


            <label for="user">Usuario Actual: <span class="text-red">* <p>{{$errors->first('user') }}</p> </span></label>
            <select name="user" id="user">
                <option value="" >Seleccione el usuario</option>
                    @foreach($users as $user)
                    <option value=" {{ $user->id }} ">
                        {{ $user->nombre }} {{ $user->apellido }}
                    </option>
                    @endforeach
                </select>

            <label for="estado">Estado de Caso de Adopcion: <span class="text-red">* <p>{{$errors->first('estado') }}</p> </span></label>
            <select name="estado" id="estado">
                <option value="" >Seleccione el estado del Caso de Adopción</option>
                    <option value="Pendiente">
                        Pendiente
                    </option>
                    <option value="En Proceso">
                        En Proceso
                    </option>
                    <option value="Aprobado">
                        Aprobado
                    </option>
                </select>

            <div class="button">

                    <button type="submit" class="ov-btn-slide-right" >
                      Actualizar Mi vacuna
                    </button>
            
            </div>
        </form>
</main>
@endsection
