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
    public function index()
    {
        
        return view("maestros");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Maestros $maestros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maestros $maestros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maestros $maestros)
    {
        //
    }
}
