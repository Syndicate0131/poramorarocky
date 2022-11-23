@extends('layouts.base')
@section('content')
<a href="/principal">
<button type="submit" class="button-prin-form">
Volver
</button>
</a>
<main class="content-form-adop">
@auth
@if(Auth::user()->tipoUsuario===1)
<table class="table table-hover table-bordered" id="datat">
<a href="{{route('usuario.create')}}"><button class="button-prin">Registrar Usuario</button></a>
<thead>
        <tr>
            <th>Id Usuario</th>
            <th>Numero de Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Tipo Usuario</th>
            <th>Foto</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->numeroDocumento}}</td>
            <td>{{$user->nombre}}</td>
            <td>{{$user->apellido}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->telefono}}</td>
            @if($user->tipoUsuario =='1')  
            <td>Administrador</td>
            @elseif ($user->tipoUsuario =='2')  
            <td>Director</td>  
            @else  
            <td>Voluntario</td>        
            @endif

            <td><img src="photoUser/{{$user->foto}}" alt="Foto Usuario" width="100" height="100"></td>
            <td><a href="{{route('usuario.edit',$user->id)}}">Editar</a></td>            <td><form action="{{route('usuario.destroy',$user->id)}}" method="post">
            @csrf
            @method('DELETE')    
            <button onclick="return confirm('Esta seguro de eliminar el Usuario?')" >Eliminar Usuario</button></form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<h1 style="margin: 100px; text-align: center; font-size:5rem;" class="form_title title">Usted No tiene Permiso En este modulo</h1>
@endif
@endauth
@guest
<h1 style="margin: 100px; text-align: center; font-size:5rem;" class="form_title title">Usted no ha iniciado Sesión</h1>
@endguest
</main>
@endsection
