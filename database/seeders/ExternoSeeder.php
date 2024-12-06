<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Externo;

class ExternoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $asesor = new Externo();
        $asesor->id = 1;
        $asesor->titulo = "Ing.";
        $asesor->nombre = "Gabriela Alejandra";
        $asesor->apellido_paterno = "Ríos";
        $asesor->apellido_materno = "Zúñiga";
        $asesor->correo_electronico = "gabriela.rz1@tuxtla.tecnm.mx";
        $asesor->puesto = "Jefa del Departamento de Departamento de Ingenierías";
        $asesor->save(); 

        $asesor = new Externo();
        $asesor->id = 2;
        $asesor->titulo = "Ing.";
        $asesor->nombre = "Alberto";
        $asesor->apellido_paterno = "Gomez";
        $asesor->apellido_materno = "Gonzales";
        $asesor->correo_electronico = "alberto.gg@hotmail.com.mx";
        $asesor->puesto = "Secretario Administrativo";
        $asesor->save(); 

        $asesor = new Externo();
        $asesor->id = 3;
        $asesor->titulo = "Ing.";
        $asesor->nombre = "Mauruicio";
        $asesor->apellido_paterno = "Montes";
        $asesor->apellido_materno = "Becerra";
        $asesor->correo_electronico = "mauruicio.mb@hotmail.com.mx";
        $asesor->puesto = "Asistente de operaciones";
        $asesor->save(); 

        $asesor = new Externo();
        $asesor->id = 4;
        $asesor->titulo = "Ing.";
        $asesor->nombre = "María Fernanda";
        $asesor->apellido_paterno = "López";
        $asesor->apellido_materno = "Díaz";
        $asesor->correo_electronico = "maria.ld@hotmail.com.mx";
        $asesor->puesto = "Secretaria asistente";
        $asesor->save(); 
    }
}
