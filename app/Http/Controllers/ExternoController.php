<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExternoRequest;
use App\Http\Requests\UpdateExternoRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Providers\ConfiguracionServiceProvider;

use App\Models\Externo;

class ExternoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Externo::all();
        return view('externo.listar',compact('todos'));
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
    public function store(StoreExternoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Externo $externo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Externo $externo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExternoRequest $request, Externo $externo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Externo $externo)
    {
        //
    }

    public function crearCuenta(Externo $externo)
    {
        $usr = new Usuario();
        $usr->usa_id=$externo->id;
        $usr->usa_type = get_class($externo);
        $usr->nombre_usuario = $externo->correo_electronico;
        $usr->contraseña = Hash::make($externo->correo_electronico);
        $usr->save();
        return redirect(route('externos.index'));


    }

    
}
