@extends('adminlte::page')

@section('title', 'Lista de Productos')

@section('content_header')
    <h1>Estudiantes</h1>
@stop

@section('content')
@if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card-header">
    <a href="{{ route('admin.estudiantes.create') }}" class="btn btn-primary btb-sm">Registrar Estudiante</a>
    <a target="_blank" href="{{ route('admin.estudiantes.pdf') }}" class="btn btn-success btb-sm">Generar Pdf</a>

</div>
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Celular</th>
                    <th>Correo Usuario<th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>{{ $estudiante->nombre }}</td>
                        <td>{{ $estudiante->apellido }}</td>
                        <td>{{ $estudiante->celular }}</td>
                        <td>{{ $estudiante->user->email }}</td>
                        <td width="10px">
                            <a href="{{ route('admin.estudiantes.edit', $estudiante) }}" class="btn btn-primary btn-sm">Editar</a> </td>
                        <td width="10px">
                            <form action="{{ route('admin.estudiantes.destroy', $estudiante) }}" method="POST">

                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form> </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
