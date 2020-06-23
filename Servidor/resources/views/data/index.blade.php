@extends('Layout.principal')

@section('contenido')

<h1>Lista de autos</h1>
<p class="lead">Datos <a href="{{ route('data.create') }}">¿Agregar nuevo?</a></p>
<hr>

@foreach($datos as $dato_auto)
    <h3> {{ $dato_auto->Auto }} </h3>
    <p> {{$dato_auto->kilometraje }} </p>
    <p> {{ $dato_auto->Descripcion }} </p>
    <p>
        <a href="{{ route('data.show', $dato_auto->id) }}" class="btn btn-info">Ver auto</a>
        <a href="{{ route('data.edit', $dato_auto->id) }}" class="btn btn-primary">Editar</a>
    </p>
    <hr>
@endforeach

@stop
