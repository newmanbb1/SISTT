@extends('adminlte::page')

@section('title', 'Lista de Proyectos')

@section('content_header')
    <h1>Proyectos</h1>
@stop

@section('content')
@if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card-header">
    <a href="{{ route('admin.proyectos.create') }}" class="btn btn-primary btb-sm">Registrar Proyecto</a>
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Resumen</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Proyecto Final</th>
                    <th>Avance del Proyecto</th>
                    <th>Estudiante</th>
                    <th>Modalidad</th>
                    <th>Seguimiento</th>
                    <th colspan="2">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto )

                    <tr>
                        <td>{{ $proyecto->titulo }}</td>
                        <td>{{ $proyecto->resumen }}</td>
                        <td>{{ $proyecto->fecha }}</td>
                        <td>{{ $proyecto->estado }}</td>
                        <td><a href="{{$proyecto->archivo}}" class="btn btn-info btn-sm">Ver Proyecto</a></td>
                        <td><a href="{{$proyecto->avance}}"class="btn btn-info btn-sm">Ver Avance</a></td>
                        <td>{{$proyecto->estudiante->nombre}}</td>
                        <td>{{$proyecto->modalidad->nombre}}</td>
                        <td><a href="{{ route('admin.seguimientoProyectos.index', ['proyecto' => $proyecto->id,'estudiante'=>$proyecto->estudiante->id]) }}" class="btn btn-primary btn-sm">Seguimiento</a></td>
                        <td width="10px">
                            <a href="{{ route('admin.proyectos.edit', $proyecto) }}" class="btn btn-primary btn-sm">Editar</a>
                        </td>

                        <td width="10px">

                            <form action="{{ route('admin.proyectos.destroy', $proyecto) }}" method="POST">

                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>

                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
