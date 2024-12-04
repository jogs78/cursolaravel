<?php

namespace App\Http\Controllers;

use App\Models\Seguimiento;
use App\Http\Requests\StoreSeguimientoRequest;
use App\Http\Requests\UpdateSeguimientoRequest;
use App\Models\Estudiante;
use App\Models\Parcial;
use Illuminate\Support\Facades\DB;

class SeguimientoController extends Controller
{
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
    public function create(Estudiante $estudiante,$consecutivo)
    {
        return view('seguimientos.parcial',compact('estudiante','consecutivo'));
       // echo "le vamos a hacer su seguimiento $consecutivo al estudiante $estudiante->nombre"; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSeguimientoRequest $request, Estudiante $estudiante,$consecutivo)
    {
        echo "guardando los datos";
        //dump($request->all());
        DB::beginTransaction();
        try {
        echo "guardando parciales";
        $seguimiento= new Parcial();
        $seguimiento-> consecutivo=$consecutivo;
        $seguimiento-> puntualidad=$request->puntualidad;
        $seguimiento-> conocimiento=$request->conocimiento;
        $seguimiento-> equipo=$request->equipo;
        $seguimiento-> dedicado=$request->dedicado;
        $seguimiento-> dedicado=$request->dedicado;
        $seguimiento-> orden=$request->orden;
        $seguimiento-> mejoras=$request->mejoras;
        echo "antes de save";
        $seguimiento-> save();
        echo "despues de save";
        $nuevo = new Seguimiento();
        echo "guardando seguimiento";
        $nuevo->desglose_id=$seguimiento->id;
        $nuevo->desglose_type="App\Models\Parcial";
        $nuevo-> save();
        DB::commit();
        echo "guardado";
        } catch (\Throwable $th) {
            //throw $th;
            echo "error $th";
            DB::rollBack();
        }
        //return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     */
    public function show(Seguimiento $seguimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seguimiento $seguimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSeguimientoRequest $request, Seguimiento $seguimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seguimiento $seguimiento)
    {
        //
    }
}
