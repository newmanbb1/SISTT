@extends('adminlte::page')

@section('title', 'Lista de Productos')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
@if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card-header">
    <a href="{{ route('admin.usuarios.create') }}" class="btn btn-primary btb-sm">Registrar Usuario</a>
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td width="10px">
                            <a href="{{ route('admin.usuarios.edit', $usuario) }}" class="btn btn-primary btn-sm">Editar</a> </td>
                        <td width="10px">
                            <form action="{{ route('admin.usuarios.destroy', $usuario) }}" method="POST">

                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form> </td>

                    </tr>
                @endforeach
        </table>
    </div>
</div>
@stop
