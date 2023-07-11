<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumnos::all();
    
        
        return view('alumnos', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("maestros_add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "dui"=>'required',
            "nombre"=>'required',
            "correo"=>'required',
            "direccion"=>'required',
            "fecha"=>'required',
        ]);

        $alumnos = new Alumnos;
        $alumnos->dui = $request->input("dui");
        $alumnos->nombre = $request->input("nombre");
        $alumnos->correo = $request->input("correo");
        $alumnos->direccion = $request->input("direccion");
        $alumnos->fecha = $request->input("fecha");
        $alumnos->save();

        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alumnos = Alumnos::where("id", $id)->first();
        // return $usuario;
        return view("alumnos_edit",compact("alumnos"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $alumnos = Alumnos::find($id);
        $alumnos->nombre = $request->input("Nombre");
        $alumnos->correo = $request->input("Correo");
        $alumnos->direccion = $request->input("Direccion");
        $alumnos->fecha = $request->input("Fecha");
        $alumnos->dui = $request->input("Dui");
        $alumnos->save();
        
        return redirect()->route("alumnos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumnos = Alumnos::findOrFail($id);
        $alumnos->delete();
    
        return redirect()->route('alumnos.index')->with('success', 'Registro eliminado exitosamente');
    }
}
