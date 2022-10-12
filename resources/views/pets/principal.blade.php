@extends('layouts.base')
@section('content')
<a href="/">
<button type="submit" class="button-prin-form">
Salir
</button>
</a>
<main class="content-prim">
<div class="content-form-prin">
    <h1>Modulo Usuarios</h1>
    <a class="prin-a" href="{{ route('usuario.index') }}">
<button type="submit"  class="button-prin">
                       Listar Usuarios
                    </button></a>
                    <a class="prin-a" href="{{ route('usuario.create') }}"><button type="submit" class="button-prin">
                       Registrar Usuarios
                    </button></a>
</div>

<div class="content-form-prin">
    <h1>Modulo Adopcion</h1>
    <a class="prin-a" href="{{ route('adoption.index') }}">
<button type="submit"  class="button-prin">
                       Listar Adopciones
                    </button></a>
                    <a class="prin-a" href="{{ route('adoption.create') }}"><button type="submit" class="button-prin">
                       Registrar Adopciones
                    </button></a>
</div>
<div class="content-form-prin">
    <h1>Modulo Peludos</h1>
    <a class="prin-a" href="{{ route('pet.index') }}">
<button type="submit"  class="button-prin">
                       Listar Peludo
                    </button></a>
                    <a class="prin-a" href="{{ route('pet.create') }}"><button type="submit" class="button-prin">
                       Registrar Peludo
                    </button></a>
</div>
<div class="content-form-prin">
    <h1>Modulo Vacunas</h1>
<a class="prin-a" href="{{ route('vaccine.index') }}">
    <button type="submit" class="button-prin">
                       Listar Vacuna
                    </button></a>
                    <a class="prin-a" href="{{ route('vaccine.create') }}"><button type="submit" class="button-prin">
                       Registrar Vacuna
                    </button></a>
</div>
<div class="content-form-prin">
    <h1>Modulo MisVacunas</h1>
<a class="prin-a"href="{{ route('myvaccine.index') }}">
    <button type="submit" class="button-prin">
                       Listar Mi Vacuna
                    </button></a>
                    <a class="prin-a" href="{{ route('myvaccine.create') }}"><button type="submit" class="button-prin">
                       Registrar Mi Vacuna
                    </button></a>
</div>
</main>
@endsection
