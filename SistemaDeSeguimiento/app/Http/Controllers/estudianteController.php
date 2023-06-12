<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as Pdf;


class estudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('admin.estudiantes.index', compact('estudiantes'));
    }

    public function pdf(){
        $estudiantes = Estudiante::all();
        $pdf = Pdf::loadView('admin.estudiantes.pdf', compact('estudiantes'));
        return $pdf->stream('estudiantes.pdf');
    }

    public function create()
    {
        $usuarios = User::pluck('name','id');
        return view('admin.estudiantes.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'celular' => 'required',
            'user_id' => 'required',
        ]);
        $estudiante = Estudiante::create($request->all());
        return redirect()->route('admin.estudiantes.edit', $estudiante)->with('info', 'El estudiante se creó con éxito');
    }

    public function show(Estudiante $estudiante)
    {
        return view('admin.estudiantes.show', compact('estudiante'));
    }

    public function edit(Estudiante $estudiante)
    {
        $usuarios = User::pluck('name','id');
        return view('admin.estudiantes.edit', compact('estudiante','usuarios'));
    }

    public function update(Request $request, Estudiante $estudiante)
    {

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'celular' => 'required',
            'user_id' => 'required',
        ]);
        $estudiante->update($request->all());
        return redirect()->route('admin.estudiantes.edit', $estudiante)->with('info', 'El estudiante se actualizó con éxito');
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('admin.estudiantes.index')->with('info', 'El estudiante se eliminó con éxito');
    }

}
