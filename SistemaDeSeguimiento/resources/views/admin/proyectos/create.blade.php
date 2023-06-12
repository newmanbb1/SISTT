@extends('adminlte::page')

@section('title', 'Nuevo Proyecto')

@section('content_header')
<h1>Nuevo Proyecto</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!!Form::open(['route'=>'admin.proyectos.store'])!!}
        <div class="form-group">
            {!!Form::label('titulo','Titulo')!!}
            {!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingrese el Titulo del proyecto '])!!}
            @error('nombre')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!!Form::label('resumen','Resumen ')!!}
            {!!Form::text('resumen',null,['class'=>'form-control','placeholder'=>'Breve Resumen de su proyecto'])!!}
            @error('apellido')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!!Form::label('fecha','Fecha')!!}
            {!!Form::date('fecha',null,['class'=>'form-control'])!!}
            @error('fecha')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('estado', 'Estado') !!}
            {!! Form::select('estado', ['Entregado' => 'Entregado', 'En revision' => 'En revisión', 'Abandonado' => 'Abandonado', 'Completado' => 'Completado'], null, ['class' => 'form-control', 'placeholder'=>'Seleccione Estado']) !!}
            @error('estado')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {!!Form::label('archivo','Enlace de su proyecto')!!}
            {!!Form::input('url','archivo',null,['class'=>'form-control','placeholder'=>'Ingrese el enlace de su Proyecto Final'])!!}
            @error('archivo')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!!Form::label('avance','Avance')!!}
            {!!Form::input('url','avance',null,['class'=>'form-control','placeholder'=>'Ingrese el enlace del avance de su proyecto'])!!}
            @error('avance')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('estudiante_id', 'Estudiante') !!}
            {!! Form::select('estudiante_id', $estudiantes, null, ['class' => 'form-control', 'placeholder'=>'Seleccione Estudiante']) !!}
            @error('estudiante_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('modalidad_id', 'Modalidad') !!}
            {!! Form::select('modalidad_id', $modalidades, null, ['class' => 'form-control', 'placeholder'=>'Seleccione Modalidad']) !!}
            @error('docente_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>




        {!!Form::submit('Crear Proyecto',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
    </div>
</div>

@stop
