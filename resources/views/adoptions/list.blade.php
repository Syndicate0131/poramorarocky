@extends('layouts.base')
@section('content')
<a href="/principal">
<button type="submit" class="button-prin-form">
Volver
</button>
</a>
<main class="content-form-adop">
    @auth
    @if(Auth::user()->tipoUsuario===1 || Auth::user()->tipoUsuario===2)
<table class="table table-hover table-bordered" id="datat">
<a href="{{route('adoption.create')}}"><button class="button-prin">Registrar Caso de Adopcion</button></a>
    <thead>
        <tr>
            <th>Id</th>
            <th>Numero Documento</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Fecha Nacimiento</th>
            <th>N. Personas</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Direccion</th>
            <th>Sueldo</th>
            <th>Nombre Empresa</th>
            <th>Contacto Empresa</th>
            <th>Id Usuario</th>
            <th>Id Peludo</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($adoptions as $adoption)
        <tr>
            <td>{{$adoption->id}}</td>
            <td>{{$adoption->numeroDocumento}}</td>
            <td>{{$adoption->nombre}}</td>
            <td>{{$adoption->apellidos}}</td>
            <td>{{$adoption->fechaNacimiento}}</td>
            <td>{{$adoption->numeroPersonasReside}}</td>
            <td>{{$adoption->celular}}</td>
            <td>{{$adoption->correo}}</td>
            <td>{{$adoption->direccion}}</td>
            <td>{{$adoption->sueldo}}</td>
            <td>{{$adoption->empresaTrabaja}}</td>
            <td>{{$adoption->contactoEmpresa}}</td>
            <td>{{$adoption->user_id}}</td>
            <td>{{$adoption->pet_id}}</td>
            <td>{{$adoption->estado}}</td>
            <td><a href="{{route('adoption.edit',$adoption->id)}}">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
    @else
    <h1 style="margin: 100px; text-align: center; font-size:5rem;" class="form_title title">Usted No tiene Permiso En este modulo</h1>
    @endif
    @endauth
    @guest
    <h1 style="margin: 100px; text-align: center; font-size:5rem;" class="form_title title">Usted no a iniciado Sesión</h1>
    @endguest
</main>
@endsection
