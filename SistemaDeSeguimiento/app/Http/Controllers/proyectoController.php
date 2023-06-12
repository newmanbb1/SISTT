<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Estudiante;
use App\Models\Modalidad;
class proyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        $estudiantes= Estudiante::all();
        return view('admin.proyectos.index', compact('proyectos','estudiantes'));
    }

    public function create()
    {
        $estudiantes = Estudiante::pluck('apellido','id');
        $modalidades = Modalidad::pluck('nombre','id');

        return view('admin.proyectos.create', compact('estudiantes','modalidades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'resumen' => 'required',
            'estado' => 'required',
            'archivo' => 'required',
            'avance' => 'required',
            'estudiante_id'=>'required',
            'modalidad_id'=>'required',
        ]);
        $proyecto = Proyecto::create($request->all());
        return redirect()->route('admin.proyectos.edit', $proyecto)->with('info', 'El proyecto se creó con éxito');
    }

    public function show(Proyecto $proyecto)
    {
        return view('admin.proyectos.show', compact('proyecto'));
    }

    public function edit(Proyecto $proyecto)
    {
        $estudiantes = Estudiante::pluck('apellido','id');
        $modalidades = Modalidad::pluck('nombre','id');
        return view('admin.proyectos.edit', compact('proyecto','estudiantes','modalidades'));
    }


    public function update(Request $request, Proyecto $proyecto)
    {

        $request->validate([
            'titulo' => 'required',
            'resumen' => 'required',
            'estado' => 'required',
            'archivo' => 'required',
            'avance' => 'required',
            'estudiante_id'=>'required',
            'modalidad_id'=>'required',
        ]);
        $proyecto->update($request->all());
        return redirect()->route('admin.proyectos.edit', $proyecto)->with('info', 'El proyecto se actualizó con éxito');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('admin.proyectos.index')->with('info', 'El proyecto se eliminó con éxito');
    }



}
