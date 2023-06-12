<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Proyecto;

class seguimientoController extends Controller
{
    public function index(Proyecto $proyecto , Estudiante $estudiante)
    {
        return view('admin.seguimientoProyecto.index', compact('proyecto', 'estudiante'));
    }





/*
    public function correcciones(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'correcciones' => 'required'
        ]);

        $proyecto->correcciones = $request->correcciones;
        $proyecto->save();

        return back()->with('status', 'Correcciones guardadas con éxito');
    }
*/
}
