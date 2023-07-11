<?php

namespace App\Http\Controllers;

use App\Models\Maestros;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaestrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    //     $filtro = $request->input('filtro');
    // $permisos = Maestros::where('nombre', 'like', '%' . $filtro . '%')
    //     ->orWhere('permiso', 'like', '%' . $filtro . '%')
    //     ->orWhere('estado', 'like', '%' . $filtro . '%')
    //     ->get();

        $maestros = Maestros::all();
    
        
        return view('maestros', compact('maestros'));

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
            "nombre"=>'required',
            "correo"=>'required',
            "direccion"=>'required',
            "fecha"=>'required',
            "clase"=>'required',
            
        ]);


        $maestros = new Maestros;
        $maestros->nombre = $request->input("nombre");
        $maestros->correo = $request->input("correo");
        $maestros->direccion = $request->input("direccion");
        $maestros->fecha = $request->input("fecha");
        $maestros->clase = $request->input("clase");
        $maestros->save();

        return redirect()->route('maestros.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(Maestros $maestros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $maestros = Maestros::where("id", $id)->first();
        // return $usuario;
        return view("maestros_edit",compact("maestros"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $maestros = Maestros::find($id);
        $maestros->nombre = $request->input("Nombre");
        $maestros->correo = $request->input("Correo");
        $maestros->direccion = $request->input("Direccion");
        $maestros->fecha = $request->input("Fecha");
        $maestros->clase = $request->input("Clase");
        $maestros->save();
        
        return redirect()->route("maestros.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $maestros = Maestros::findOrFail($id);
        $maestros->delete();
    
        return redirect()->route('maestros.index')->with('success', 'Registro eliminado exitosamente');
    }
}
