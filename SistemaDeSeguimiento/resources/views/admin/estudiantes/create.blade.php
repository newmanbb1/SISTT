@extends('adminlte::page')

@section('title', 'Nuevo Estudiante')

@section('content_header')
    <h1>Nuevo Estudiante</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
    {!!Form::open(['route'=>'admin.estudiantes.store'])!!}
    <div class="form-group">
                {!!Form::label('nombre','Nombre')!!}
                {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre/s '])!!}
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    <div class="form-group">
                {!!Form::label('apellido','Apellidos')!!}
                {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingrese sus Apellido/s  '])!!}
                @error('apellido')
                    <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    <div class="form-group">
                {!!Form::label('celular','Celular')!!}
                {!!Form::number('celular',null,['class'=>'form-control','placeholder'=>'Ingrese su Celular'])!!}
                @error('celular')
                    <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    <div class="form-group">
            {!! Form::label('user_id', 'Seleccione Usuario') !!}
            {!! Form::select('user_id', $usuarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un usuario']) !!}
            @error('user_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
    </div>

    {!!Form::submit('Crear Estudiante',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    </div>
</div>

@stop
