@extends('layouts.base')
@section('content')
<a href="/principal">
<button type="submit" class="button-prin-form">
Volver
</button>
</a>
<main class="content-form">
<table class="table table-hover table-bordered" id="datat">
<a href="{{route('myvaccine.create')}}"><button class="button-prin">Registrar Mi Vacuna</button></a>
    <thead>
        <tr>
        <th>Id Mi Vacuna</th>
            <th>Fecha Vacuna</th>
            <th>Id Peludo</th>
            <th>Id Vacuna</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($myvacs as $myvac)
        <tr>
            <td>{{$myvac->id}}</td>
            <td>{{$myvac->fechaVacuna}}</td>
            <td>{{$myvac->pets_id}}</td>
            <td>{{$myvac->vaccines_id}}</td>
            <td><a href="{{route('myvaccine.edit',$myvac->id)}}">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</main>
@endsection
