@extends('adminlte::page')

@section('title', 'Nuevo Usuario')

@section('content_header')
    <h1>Nuevo Usuario</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
    {!!Form::open(['route'=>'admin.usuarios.store'])!!}
    <div class="form-group">
                {!!Form::label('name','Nombre')!!}
                {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre '])!!}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    <div class="form-group">
                {!!Form::label('email','E-mail')!!}
                {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese su email  '])!!}
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    <div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese su contraseña']) !!}
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
    </div>

    <div class="form-group">
                {!!Form::label('password','Repita su Password')!!}
                {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese su contraseña'])!!}
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    {!!Form::submit('Crear Usuario',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    </div>
</div>

@stop
