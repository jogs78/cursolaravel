<?php

namespace Database\Seeders;
use App\Models\Parcial;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParcialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parcial = new Parcial();
        $parcial->estudiante_id = 1;
        $parcial->promedio_parcial = 100;
        $parcial->consecutivo = 1;
        $parcial->puntualidad_interno = 10;
        $parcial->conocimiento_interno = 20;
        $parcial->equipo_interno = 15;
        $parcial->dedicado_interno = 20;
        $parcial->orden_interno = 20;
        $parcial->mejoras_interno = 15;
        $parcial->promedio_interno = 15;        
        $parcial->ruta = "C:\\Users\\omner\\Desktop";
        $parcial->save(); 

        $parcial = new Parcial();
        $parcial->estudiante_id = 1;
        $parcial->promedio_parcial = 100;
        $parcial->consecutivo = 2;
        $parcial->puntualidad_interno = 10;
        $parcial->conocimiento_interno = 20;
        $parcial->equipo_interno = 15;
        $parcial->dedicado_interno = 20;
        $parcial->orden_interno = 20;
        $parcial->mejoras_interno = 15;
        $parcial->promedio_interno = 15;        
        $parcial->ruta = "C:\\Users\\omner\\Desktop";
        $parcial->save(); 
////////////////
        $parcial = new Parcial();
        $parcial->estudiante_id = 2;
        $parcial->promedio_parcial = 100;
        $parcial->consecutivo = 1;
        $parcial->puntualidad_interno = 10;
        $parcial->conocimiento_interno = 20;
        $parcial->equipo_interno = 15;
        $parcial->dedicado_interno = 20;
        $parcial->orden_interno = 20;
        $parcial->mejoras_interno = 15;
        $parcial->promedio_interno = 15;        
        $parcial->ruta = "C:\\Users\\omner\\Desktop";
        $parcial->save(); 

        $parcial = new Parcial();
        $parcial->estudiante_id = 2;
        $parcial->promedio_parcial = 100;
        $parcial->consecutivo = 2;
        $parcial->puntualidad_interno = 10;
        $parcial->conocimiento_interno = 20;
        $parcial->equipo_interno = 15;
        $parcial->dedicado_interno = 20;
        $parcial->orden_interno = 20;
        $parcial->mejoras_interno = 15;
        $parcial->promedio_interno = 15;        
        $parcial->ruta = "C:\\Users\\omner\\Desktop";
        $parcial->save(); 
////////////////
        $parcial = new Parcial();
        $parcial->estudiante_id = 3;
        $parcial->promedio_parcial = 100;
        $parcial->consecutivo = 1;
        $parcial->puntualidad_interno = 10;
        $parcial->conocimiento_interno = 20;
        $parcial->equipo_interno = 15;
        $parcial->dedicado_interno = 20;
        $parcial->orden_interno = 20;
        $parcial->mejoras_interno = 15;
        $parcial->promedio_interno = 15;        
        $parcial->ruta = "C:\\Users\\omner\\Desktop";
        $parcial->save(); 

        $parcial = new Parcial();
        $parcial->estudiante_id = 3;
        $parcial->promedio_parcial = 100;
        $parcial->consecutivo = 2;
        $parcial->puntualidad_interno = 10;
        $parcial->conocimiento_interno = 20;
        $parcial->equipo_interno = 15;
        $parcial->dedicado_interno = 20;
        $parcial->orden_interno = 20;
        $parcial->mejoras_interno = 15;
        $parcial->promedio_interno = 15;        
        $parcial->ruta = "C:\\Users\\omner\\Desktop";
        $parcial->save(); 
////////////////
     }
}
