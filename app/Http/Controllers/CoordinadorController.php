<?php

namespace App\Http\Controllers;

use App\Models\Coordinador;
use App\Http\Requests\StoreCoordinadorRequest;
use App\Http\Requests\UpdateCoordinadorRequest;
use App\Models\Proyecto;
use App\Models\Configuracion;
use App\Models\Asesor;
use Illuminate\Http\Request;

class CoordinadorController extends Controller
{


    public function tabla(){
        $periodo_id = Configuracion::where('variable','periodo')->first()->valor;
        $proyectos = Proyecto::where('periodo_id', $periodo_id)->get();
        $asesores = Asesor::all();

        return view ('coordinador.tabla', compact('proyectos','asesores'));
    }
    public function asignarAsesor1(){
        $periodo_id = Configuracion::where('variable','periodo')->first()->valor;
        $proyectos = Proyecto::where('periodo_id', $periodo_id)->get();
        return view ('coordinador.asignar-asesor1', compact('proyectos'));
    }

    public function asignarAsesor2(Request $request){
        
        $proyecto = Proyecto::find($request->proyecto_id);
        $asesores = Asesor::all();
        return view ('coordinador.asignar-asesor2', compact('proyecto','asesores'));
    }
    public function asignarAsesor3(Request $request, $proyecto_id){
        
        $proyecto = Proyecto::find($proyecto_id);
        $proyecto->asesor_id = $request->asesor_id;
        $proyecto->save();
        return redirect(route('coordinadores.tabla'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCoordinadorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Coordinador $coordinador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coordinador $coordinador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoordinadorRequest $request, Coordinador $coordinador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coordinador $coordinador)
    {
        //
    }
}
