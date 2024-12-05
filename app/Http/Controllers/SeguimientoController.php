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

        //ahorita solo estamos trabajando con parciales no con ultimo
        return view('seguimientos.parcial.crear',compact('estudiante','consecutivo'));
       // echo "le vamos a hacer su seguimiento $consecutivo al estudiante $estudiante->nombre"; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSeguimientoRequest $request, Estudiante $estudiante, $consecutivo)
    {
        echo "guardando los datos";
        //dump($request->all());
        DB::beginTransaction();
        try {
            $parcial = new Parcial();
            $parcial->estudiante_id = 1;
            $parcial-> consecutivo=$consecutivo;
            $parcial-> puntualidad_interno=$request->puntualidad;
            $parcial-> conocimiento_interno=$request->conocimiento;
            $parcial-> equipo_interno=$request->equipo;
            $parcial-> dedicado_interno=$request->dedicado;
            $parcial-> orden_interno=$request->orden;
            $parcial-> mejoras_interno=$request->mejoras;
            $parcial-> save();
            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            echo "error $th";
            DB::rollBack();
        }
        return redirect()->route("home");
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
    public function update(UpdateSeguimientoRequest $request, Estudiante $estudiante, $consecutivo)
    {
        //encontrar ese parcial
        $parcial = Parcial::where('estudiante_id', $estudiante->id)
                          ->where('consecutivo',$consecutivo)
                          ->first();

        $parcial->promedio_parcial = $request->promedio;
        //guardar el archivo
        $parcial->save(); 
                                            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seguimiento $seguimiento)
    {
        //
    }
}
