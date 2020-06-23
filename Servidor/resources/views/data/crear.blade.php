@extends('Layout.principal')

@section('contenido')

<h1>Agregar datos</h1>
<p class="lead">Agrega los datos en la parte de abajo</p>
<hr>

{!! Form::open([
    'route' => 'data.store'
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
    {!! Form::label('Descripcion', 'Description del auto:', ['class' => 'control-label']) !!}
    {!! Form::textarea('Descripcion', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
