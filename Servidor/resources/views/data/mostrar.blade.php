@extends('Layout.principal')

@section('contenido')

<h1>{{ $data->Auto }}</h1>
<p class="lead">
{{ $data->kilometraje }} <br>
{{ $data->Descripcion }}
</p>
<hr>

<a href="{{ route('data.index') }}" class="btn btn-info">Volver</a>
<a href="{{ route('data.edit', $data->id) }}" class="btn btn-primary">Editar</a>

<div class="pull-right">
{!! Form::open([
            'method' => 'DELETE',
            'route' => ['data.destroy', $data->id]
        ]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
</div>

@stop
