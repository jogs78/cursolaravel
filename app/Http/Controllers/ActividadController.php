<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Proyecto;
use App\Models\Periodo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreActividadRequest;
use App\Http\Requests\UpdateActividadRequest;


class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Proyecto $proyecto)
    {
        $todos = $proyecto->actividades;
        return view('proyecto.mostrar',compact('todos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Proyecto $proyecto)
    {
        //MOSTRAR FORMULARIO PARA CREAR
        $actividades = Actividad::all();
        return view('actividad.crear',compact('actividades','proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Proyecto $proyecto)
    {
        //guardar las activides
        $nueva = new Actividad;
        $nueva->fill($request->all());
        $nueva->proyecto_id = $proyecto->id;
        $nueva->save();
        return redirect(route('proyectos.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto, Actividad $actividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto, Actividad $actividad)
    {
        return view('actividad.editar',compact("actividad"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto, Actividad $actividad)
    {
        $actividad->fill($request->all());
        $actividad->save();
        return redirect()->route("home");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto, Actividad $actividad)
    {   
        $actividad->delete();
        return redirect()->route("proyectos.actividades.index",$proyecto->id);
    }
}
