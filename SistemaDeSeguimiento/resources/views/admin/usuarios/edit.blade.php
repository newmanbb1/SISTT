@extends('adminlte::page')

@section('title', 'Nuevo Usuario')

@section('content_header')
    <h1>Editar Usuario {{$usuario->name}}</h1>
@stop

@section('content')
@if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
    {!!Form::model($usuario,['route'=>['admin.usuarios.update',$usuario->id],'method'=>'put'])!!}
    <div class="form-group">
                {!!Form::label('name','Nombre')!!}
                {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre '])!!}
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    <div class="form-group">
                {!!Form::label('email','E-mail')!!}
                {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese su email  '])!!}
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    <div class="form-group">
                {!!Form::label('password','Password')!!}
                {!!Form::text('password',null,['class'=>'form-control','placeholder'=>'Ingrese su contraseña'])!!}
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    <div class="form-group">
                {!!Form::label('password','Repita su Password')!!}
                {!!Form::text('password',null,['class'=>'form-control','placeholder'=>'Ingrese su contraseña'])!!}
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror
    </div>
    {!!Form::submit('Editar Usuario',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    </div>
</div>

@stop
