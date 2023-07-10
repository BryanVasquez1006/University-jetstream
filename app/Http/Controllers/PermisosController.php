<?php

namespace App\Http\Controllers;

use App\Models\Permisos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class PermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permisos = Permisos::all();
        return view("permisos", compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(String $id)
    {
        // $usuario = Permisos::where("id", $id)->first();
        // // return $usuario;
        // return view("add",compact("usuario"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Permisos $permisos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = Permisos::where("id", $id)->first();
        // return $usuario;
        return view("edit",compact("usuario"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $usuario = Permisos::find($id);
        $usuario->correo = $request->input("Correo");
        $usuario->save();
        
        return redirect()->route("permisos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $permiso = Permisos::findOrFail($id);
        $permiso->delete();
    
        return redirect()->route('permisos.index')->with('success', 'Registro eliminado exitosamente');
    }
}
