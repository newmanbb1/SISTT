<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('admin.usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $usuario = User::create($request->all());
        return redirect()->route('admin.usuarios.edit', $usuario)->with('info', 'El usuario se creó con éxito');
    }

    public function show(User $usuario)
    {
        return view('admin.usuarios.show', compact('usuario'));
    }

    public function edit(User $usuario)
    {
        return view('admin.usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, User $usuario)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $usuario->update($request->all());
        return redirect()->route('admin.usuarios.edit', $usuario)->with('info', 'El usuario se actualizó con éxito');
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('admin.usuarios.index')->with('info', 'El usuario se eliminó con éxito');
    }


}


