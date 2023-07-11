<?php

namespace App\Http\Controllers;

use App\Models\Clases;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clases = Clases::all();
    
        
        return view('clases', compact('clases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("clases_add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "clase"=>'required',
            "maestro"=>'required',
            "alumnos"=>'required',
           
        ]);

        $clases = new Clases;
        $clases->clase = $request->input("clase");
        $clases->maestro = $request->input("maestro");
        $clases->alumnos_ins = $request->input("alumnos_ins");
      
        $clases->save();

        return redirect()->route('clases.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clases $clases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clases = Clases::where("id", $id)->first();
        // return $usuario;
        return view("alumnos_edit",compact("clases"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $clases = Clases::find($id);
        $clases->nombre = $request->input("Nombre");
        $clases->correo = $request->input("Correo");
        $clases->direccion = $request->input("Direccion");
        $clases->fecha = $request->input("Fecha");
        $clases->dui = $request->input("Dui");
        $clases->save();
        
        return redirect()->route("clases.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $clases = Clases::findOrFail($id);
        $clases->delete();
    
        return redirect()->route('clases.index')->with('success', 'Registro eliminado exitosamente');
    }
}
