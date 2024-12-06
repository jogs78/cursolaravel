<?php

use App\Http\Controllers\PuertaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesoController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ParcialController;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\CoordinadorController;
use App\Http\Controllers\SeguimientoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludar', function (){
    return view('saludo');
});

//rutas de introduccion o practica
Route::get('/entrar',[PuertaController::class,'formulario']);
Route::get('/salir',[AccesoController::class,'salida'])->name('salida');
Route::get('/contraseña',[AccesoController::class,'cambio'])->name('Cambiar_Contraseña');
Route::post('/adentro',[AccesoController::class,'adentro'])->name('adentro');
Route::get('home',[AccesoController::class,'home'])->middleware('auth')->name('home');
Route::get('/login',[AccesoController::class,'login'])->name('login');
//Route::get('/registro',[AccesoController::class,'registro'])->name('registro');
//Route::get('/periodo',[AccesoController::class,'periodo'])->name('periodo');
Route::get('/reporte',[AccesoController::class,'reporte'])->name('reporte');
Route::get('/estatus',[AccesoController::class,'estatus'])->name('estatus');
Route::get('/plantilla',[AccesoController::class,'plantilla'])->name('plantilla');

//rutas especificas del coordinador
Route::get('tabla',[CoordinadorController::class,'tabla'])->middleware('auth')->name('coordinadores.tabla');
Route::get('asignar-asesores',[CoordinadorController::class,'asignarAsesor1'])->middleware('auth')->name('coordinadores.asignarAsesor1');
Route::post('asignar-asesores',[CoordinadorController::class,'asignarAsesor2'])->middleware('auth')->name('coordinadores.asignarAsesor2');
Route::put('asignar-asesores/{proyecto_id}',[CoordinadorController::class,'asignarAsesor3'])->middleware('auth')->name('coordinadores.asignarAsesor3');

//rutas especificas del estudiante
Route::get('create',[EstudianteController::class,'create'])->middleware('auth')->name('estudiante.crear');
Route::get('solicitud',[EstudianteController::class,'solicitud'])->middleware('auth')->name('estudiante.impresiones.solicitud');
Route::get('anteproyecto',[EstudianteController::class,'anteproyecto'])->middleware('auth')->name('estudiante.impresiones.anteproyecto');

//rutas especificas del asesor
Route::get('listar-proyectos',[AsesorController::class,'proyecto'])->middleware('auth')->name('asesor.listar-proyectos');


//rutas especificas de los segumientos (pueden entrar asesor, estudiante, coordinador)
//faltan dos tipos de Read en el crud
Route::get('realizar-seguimientos/{estudiante}/{consecutivo}',[SeguimientoController::class,'create'])->name('realizar-seguimientos'); //Crud
Route::post('guardar-seguimientos/{estudiante}/{consecutivo}',[SeguimientoController::class,'asesorInterno'])->name('guardar-seguimientos'); //Crud

Route::get('modificar-seguimientos/{estudiante}/{consecutivo}',[SeguimientoController::class,'edit'])->name('modificar-seguimientos'); //crUd
Route::put('actualizar-seguimientos/{estudiante}/{consecutivo}',[SeguimientoController::class,'update'])->name('actualizar-seguimientos'); //crUd
//no implmentaremos el D puesto que es para borrar y no veo la necesidad de borrar un seguimiento

//rutas de los CRUD 
Route::resource('proyectos',ProyectoController::class);
Route::resource('periodos',PeriodoController::class);
Route::resource('estudiantes',EstudianteController::class)->except(['show']);
Route::resource('parciales',ParcialController::class);
Route::resource('asesores',AsesorController::class)->except(['show'])->middleware('auth');
Route::resource('carreras',CarreraController::class)->except(['show']);
Route::resource('empresas',EmpresaController::class);
Route::resource('actividades',ActividadController::class);

//rutas de vistas para aviso o Extras al CRUD
Route::get('/asesores/{pagina}', [AsesorController::class, 'mostrar'])->middleware('auth');
Route::get('/carreras/{pagina}', [CarreraController::class, 'mostrar']);
Route::get('/estudiantes/{pagina}', [EstudianteController::class, 'mostrar']);
Route::post('/generar-pdf', [EmpresaController::class,'generarPdf'])->name('generar.pdf');


//Route::post('/subir', [EstudianteController::class, 'subirPDF'])->name('subir.pdf');
