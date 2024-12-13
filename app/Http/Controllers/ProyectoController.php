<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Http\Requests\StoreProyectoRequest;
use App\Http\Requests\UpdateProyectoRequest;
use App\Models\Periodo;
use App\Models\Asesor;
use App\Models\Externo;
use App\Models\Empresa;
use App\Providers\ConfiguracionServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listar
        $todos = Proyecto::all();
        return view('proyecto.listar',compact('todos'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProyectoRequest $request)
    {
        //esto debe esta en una transaccion
        //GUARDAR LOS DATOS QUE VIENEN DEL FORMULARIO DE CREAR
        $nuevo = new Proyecto;
        $nuevo->fill($request->all());
        $nuevo->save();

        $estudiante = Auth::user()->usa;
        $estudiante->proyecto_id = $nuevo->id;
        $estudiante->save();
        return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        return view('proyecto.editar',compact("proyecto"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProyectoRequest $request, Proyecto $proyecto)
    {
        //ACTUALIZAR LA BASE DE DATOS CON LOS DATOS QUE VIENEN DEL FORMULARIO DE EDITAR UN PERIODO
        $proyecto->fill($request->all());
        $proyecto->save();
        return redirect()->route("home");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        //ELIMINAR EL PERIODO QUE ME DIGAN
        $proyecto->delete();
        return redirect()->route("home");
    }

  public function registrarProyecto()
    {

        $estudiante = Auth::user()->usa;
        $proyecto = $estudiante->proyecto;
        //debe verificar si tiene un proyecto ya creado 
        if(! is_null( $proyecto )) return view ('proyecto.mostrar',compact('proyecto'));
        //return view (vista que muestra el proyecto y con el enlace de "actividades del proyecto")
        //si no entonces que cargue el registro
        
        $asesores = Asesor::all();
        $empresas = Empresa::all();
        $externos = Externo::all();
        $periodo = Periodo::find(ConfiguracionServiceProvider::get('periodo_id'));
        return view('proyecto.crear', compact('asesores','empresas','periodo','externos'));

    }

}