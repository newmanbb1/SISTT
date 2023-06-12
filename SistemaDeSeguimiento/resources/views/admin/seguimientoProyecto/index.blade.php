@extends('adminlte::page')

@section('title', 'Lista de Productos')

@section('content_header')

@stop

@section('content')
<div class="container">
        <h1>Seguimiento de Proyecto</h1>

        <div class="card">
            <div class="card-header">
                Información del Proyecto
            </div>

            <div class="card-body">
                <h3>{{ $proyecto->titulo }}</h3>
                <p>Resumen: {{ $proyecto->resumen }}</p>
                <p>Fecha: {{ $proyecto->fecha }}</p>
                <p>Estado: {{ $proyecto->estado }}</p>
                <p>Enlace del proyecto final: <a href="{{ $proyecto->archivo }}">{{ $proyecto->archivo }}</a></p>
                <p>Avance del proyecto: <a href="{{ $proyecto->avance }}">{{ $proyecto->avance }}</a></p>
            </div>

        </div>

        <div class="card mt-4">
            <div class="card-header">
                Información del Estudiante
            </div>
            <div class="card-body">
                <p>Nombre Estudiante: {{ $proyecto->estudiante->nombre }}</p>
                <p>Apellido Estudiante: {{ $proyecto->estudiante->apellido }}</p>
                <p>Celular Estudiante: {{ $proyecto->estudiante->celular}}</p>

            </div>
        </div>


    </div>

@stop
