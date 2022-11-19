@extends('layouts.base')
@section('content')
<a href="/principal">
<button type="submit" class="button-prin-form">
Volver
</button>
</a>
<main class="content-form">
    @auth
<table class="table table-hover table-bordered" id="datat">
<a href="{{route('vaccine.create')}}"><button class="button-prin">Registrar Vacuna</button></a>
    <thead>
        <tr>
            <th>Id Vacuna</th>
            <th>Nombre Vacuna</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vacs as $vac)
        <tr>
            <td>{{$vac->id}}</td>
            <td>{{$vac->nombreVacuna}}</td>
            <td><a href="{{route('vaccine.edit',$vac->id)}}">Editar</a></td>
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
