<?php

namespace App\Http\Controllers;

use App\Models\Seguimiento;
use App\Http\Requests\SeguimientoRequest;
use App\Models\Estudiante;
use App\Models\Parcial;
use Illuminate\Support\Facades\Auth;

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
        $usuario = Auth::getUser();
        //dd($usuario->usa_type);
        switch ($usuario->usa_type) {
            case 'App\Models\Asesor':
                //dd("es asesor");
                if($consecutivo == 'primer' or $consecutivo == 'segundo'){
                    
                    $parcial = Parcial::firstOrCreate(
                        ['estudiante_id' => $estudiante->id,'consecutivo' => $consecutivo ], 
                    );
                    return view('seguimientos.parcial.calificar-interno',compact('estudiante','consecutivo','parcial'));                    
                }
                
                if($consecutivo == 'ultimo' ){
                    $ultimo = Parcial::firstOrCreate(
                        ['estudiante_id' => $estudiante->id ], 
                    );
                    
                    return view('seguimientos.ultimo.calificar',compact('estudiante','consecutivo','ultimo'));

                }
                break;
            
            case 'App\Models\Externo':
                if($consecutivo == 'primer' or $consecutivo == 'segundo'){
                    
                    $parcial = Parcial::firstOrCreate(
                        ['estudiante_id' => $estudiante->id ], 
                        ['consecutivo' => $consecutivo ] 
                    );
                    return view('seguimientos.parcial.calificar-externo',compact('estudiante','consecutivo','parcial'));                    
                }
                
                if($consecutivo == 'ultimo' ){
                    $ultimo = Parcial::firstOrCreate(
                        ['estudiante_id' => $estudiante->id ], 
                    );
                    return view('seguimientos.ultimo.calificar',compact('estudiante','consecutivo','ultimo'));

                }                break;
            
            case 'App\Models\Estudiante':
                # code...
                break;
            
            default:
                # code...
                break;
        }
        //ahorita solo estamos trabajando con parciales no con ultimo
       // echo "le vamos a hacer su seguimiento $consecutivo al estudiante $estudiante->nombre"; 
    }

    public function calificar(SeguimientoRequest $request, Estudiante $estudiante, $consecutivo)
    {
        $usuario = Auth::getUser();
        $tipo = $usuario->usa_type;
        switch ($tipo) {
            case 'App\Models\Asesor':
                $campos = ['promedio','puntualidad_interno','conocimiento_interno','equipo_interno','dedicado_interno','orden_interno','mejoras_interno','comentarios_interno'];
                break;
            
            case 'App\Models\Externo':
                $campos = [
                    'puntualidad_externo',
                    'equipo_externo',
                    'iniciativa_externo',
                    'mejoras_externo', 
                    'objetivos_externo', 
                    'orden_externo', 
                    'liderazgo_externo', 
                    'conocimiento_externo',
                    'etico_externo', 
                    'promedio_externo',
                    'comentarios_externo',                    
                ];
                break;
            case 'App\Models\Estudiante':
                # code...
                break;
            
            default:
                # code...
                break;
        }

        if($consecutivo=='primer' or $consecutivo=='segundo'){
            $parcial = Parcial::firstOrCreate(
                ['estudiante_id' => $estudiante->id, 'consecutivo' => $consecutivo ], 
                ['consecutivo' => $consecutivo ] 
            );
            //dd($request->all());
            $suma = 0;
            foreach ($campos as $campo) {
                if($request->has($campo)){
                    $parcial->$campo=$request->input($campo);
                    $suma += (int) $request->input($campo);
                }
            }
            $suma = $suma;
            switch ($tipo) {
                case 'App\Models\Asesor':
                    $parcial->promedio_interno =  $suma;
                    break;
                case 'App\Models\Externo':
                    $parcial->promedio_externo =  $suma;
                    break;
                case 'App\Models\Estudiante':
                    # code...
                    break;                
                default:
                    # code...
                    break;
            }
    

            $parcial->save();
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
