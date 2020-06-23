@extends('Layout.principal')

@section('contenido')

<h1>Editar auto - {{ $data->Auto }} </h1>
<p class="lead">Edita en la parte de abajo. <a href="{{ route('data.index') }}">Regresar</a></p>
<hr>


{!! Form::model($data, [
    'method' => 'PATCH',
    'route' => ['data.update', $data->id]
]) !!}

<div class="form-group">
    {!! Form::label('Auto', 'Auto:', ['class' => 'control-label']) !!}
    {!! Form::text('Auto', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('kilometraje', 'Kilometraje:', ['class' => 'control-label']) !!}
    {!! Form::number('kilometraje', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Descripcion', 'Descripcion:', ['class' => 'control-label']) !!}
    {!! Form::textarea('Descripcion', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
