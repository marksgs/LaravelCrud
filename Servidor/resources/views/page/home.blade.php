@extends('Layout.principal')

@section('contenido')

<h1>Bienvenido</h1>
<p class="lead">Agrega y modifica tus propios autos</p>
<hr>

<a href="{{ url('data') }}" class="btn btn-info">Ver Datos</a>
<a href="{{ url('data/create') }}" class="btn btn-primary">Agregar</a>

@stop
