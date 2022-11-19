@extends('layouts.base')
@section('content')
<a href="/principal">
<button type="submit" class="button-prin-form">
Volver
</button>
</a>
<main class="content-form-pet">
    @auth
<table class="table table-hover table-bordered" id="datat">
<a href="{{route('pet.create')}}"><button class="button-prin">Registrar Peludo</button></a>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Descripcion</th>
            <th>Raza</th>
            <th>Zona</th>
            <th>Estado</th>
            <th>Usuario</th>
            <th>Foto</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td>{{$pet->id}}</td>
            <td>{{$pet->nombrePeludo}}</td>
            <td>{{$pet->edad}}</td>
            <td>{{$pet->descripcionSalud}}</td>
            <td>{{$pet->raza}}</td>
            <td>{{$pet->zonaVivienda}}</td>
            <td>{{$pet->estadoPeludo}}</td>
            <td>{{$pet->user_id}}</td>
            <td><img src="photoPet/{{$pet->foto}}" alt="Foto Peludo" width="100" height="100"></td>
            <td><a href="{{route('pet.edit',$pet->id)}}">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
    @endauth
    @guest
    <h1 style="margin: 100px; text-align: center; font-size:5rem;" class="form_title title">Usted no ha iniciado Sesión</h1>
    @endguest
</main>
@endsection
