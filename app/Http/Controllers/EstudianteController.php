<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEstudianteRequest;
use App\Http\Requests\UpdateEstudianteRequest;
use App\Models\Estudiante;
use App\Models\Carrera;
use App\Models\Usuario;
use App\Models\Proyecto;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Providers\ConfiguracionServiceProvider;
use App\Models\Periodo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listar
        $todos = Estudiante::all();
        return view('estudiante.listar',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //MOSTRAR FORMULARIO PARA CREAR
        $carreras = Carrera::all();
        return view('estudiante.crear',compact('carreras'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEstudianteRequest $request)
    {
        DB::beginTransaction();
        try {
            $nuevo = new Estudiante;
            $nuevo->fill($request->all());    
            $nuevo->save();
            $usr = new Usuario();
            $usr->usa_id=$nuevo->id;
            $usr->usa_type = get_class($nuevo);
            $usr->nombre_usuario = $nuevo->correo_electronico;
            $usr->contraseña = Hash::make($request->contraseña);
            $usr->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        

        return redirect()->route("estudiantes.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        dump(estudiante);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
        //MOSTRAR EL FORMULARIO PARA EDITAR UN ESTUDIANTE

        return view('estudiante.editar',compact("estudiante"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEstudianteRequest $request, Estudiante $estudiante)
    {
        //ACTUALIZAR LA BASE DE DATOS CON LOS DATOS QUE VIENEN DEL FORMULARIO DE EDITAR UN PERIODO
        $estudiante->fill($request->all());
        $estudiante->save();
        return redirect()->route("home");
        //return redirect()->route("estudiantes.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        //ELIMINAR AL ESTUDIANTE QUE ME DIGAN
        $estudiante->delete();
        return redirect()->route("estudiante.index");
    }

    public function promedio(){
            return view('estudiante.promedio');
    }

    public function mostrar($pagina)
    {
        // Logica para determinar qué vista devolver
        if ($pagina == 'alta-proyecto') {
            return view('estudiante.alta-proyecto');
        }/*
        elseif ($pagina == 'asignar') {
            return view('coordinador.asignar-asesor');
        }
        elseif ($pagina == 'solicitud') {//imprimir-solicitud
            return view('estudiante.impresiones.solicitud');
        }
        elseif ($pagina == 'imprimir-anteproyecto') {
            return view('estudiante.impresiones.anteproyecto');
        }*/ 
        elseif ($pagina == 'fuera-periodo') {
            return view('asesor.avisos.fuera-periodo');
        }
        elseif ($pagina == 'no-calificacion') {
            return view('estudiante.avisos.no-calificacion');
        }
        elseif ($pagina == 'calificacion') {
            return view('estudiante.calificacion');
        }
        elseif ($pagina == 'no-promedio') {
            return view('estudiante.avisos.no-promedio');
        }
        elseif ($pagina == 'si-promedio') {
            return view('estudiante.avisos.si-promedio');
        }
        else {
            return abort(404); // Si la página no existe, lanzamos un 404
        }
    }

    public function solicitud()
    {
        $estudiante = Auth::getUser()->usa;
        $jefe = ConfiguracionServiceProvider::get('jefe_division');
//        $periodo = Periodo::find(ConfiguracionServiceProvider::get('periodo_id'))->nombre;

        $pdf = Pdf::loadview('estudiante.impresiones.solicitud',compact('jefe','estudiante')); 
        return $pdf->download('Solicitud.pdf');
        return view('estudiante.impresiones.solicitud'); 
    }

    public function anteproyecto()
    {
        $estudiante = Auth::getUser()->usa;
       // $jefe = ConfiguracionServiceProvider::get('jefe_division');
        $pdf = Pdf::loadview('estudiante.impresiones.anteproyecto',compact('estudiante')); 
        return $pdf->download('Anteproyecto.pdf');
        return view('estudiante.impresiones.anteproyecto'); 
    }

    public function primer()
    {
        $estudiante = Auth::getUser()->usa;
        $pdf = Pdf::loadview('estudiante.impresiones.seguimientos.primer',compact('estudiante')); 
        return $pdf->download('Primer_Seguimiento.pdf');
        return view('estudiante.impresiones.seguimientos.primer'); 
    }

    public function segundo()
    {
        $estudiante = Auth::getUser()->usa;
        $pdf = Pdf::loadview('estudiante.impresiones.seguimientos.segundo',compact('estudiante')); 
        return $pdf->download('Segundo_Seguimiento.pdf');
        return view('estudiante.impresiones.seguimientos.segundo'); 
    }

    public function ultimo()
    {
        $estudiante = Auth::getUser()->usa;
        $pdf = Pdf::loadview('estudiante.impresiones.seguimientos.ultimo',compact('estudiante')); 
        return $pdf->download('Ultimo_Seguimiento.pdf');
        return view('estudiante.impresiones.seguimientos.ultimo'); 
    }

    public function pdf(Request $request)
    {
        // Validar que el archivo sea un PDF
        $request->validate([
            'archivo' => 'required|mimes:pdf|max:2048',  // Máximo tamaño 2MB
        ]);

        // Guardar el archivo en una carpeta dentro de 'storage'
        if ($request->file('archivo')) {
            $archivo = $request->file('archivo');
            $nombreArchivo = time().'_'.$archivo->getClientOriginalName(); // Nombre único
            $ruta = $archivo->storeAs('pdfs', $nombreArchivo, 'public'); // Guardar en storage/app/public/pdfs

            return back()->with('success', 'Archivo subido exitosamente.')->with('ruta', $ruta);
        }

        return back()->with('error', 'Hubo un problema al subir el archivo.');
    }
    
    public function mostrarPrimer(){
        //checas si tiene calificaciones ....
        
        //generas el pdf...
        //$pdf->down()
    }
}
