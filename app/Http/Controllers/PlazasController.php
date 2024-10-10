<?php

namespace App\Http\Controllers;

use App\Models\Plazas;
use Illuminate\Http\Request;

class PlazasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plazas= Plazas::get(); 
        //return view("alumnos/index" , ['alumnos' =>$alumnos]);
        return view("plazas/index" , compact('plazas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("plazas/create");
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
    public function show(Plazas $plazas)
    {
        return view("plazas/show");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plazas $plazas)
    {
        return view("plazas/edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plazas $plazas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plazas $plazas)
    {
        return view("plazas/destroy");
    }
}
