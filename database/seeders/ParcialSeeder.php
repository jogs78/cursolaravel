<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParcialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parcial = new Primero();
        $parcial->consecutivo = 1;
        $parcial->puntualidad = 10;
        $parcial->conocimiento = 20;
        $parcial->equipo = 15;
        $parcial->dedicado = 20;
        $parcial->orden = 20;
        $parcial->mejoras = 15;
        $parcial->ruta = "C:\\Users\\omner\\Desktop";
        $parcial->save(); 

        $parcial = new Segundo();
        $parcial->consecutivo = 2;
        $parcial->puntualidad = 1;
        $parcial->conocimiento = 15;
        $parcial->equipo = 5;
        $parcial->dedicado = 2;
        $parcial->orden = 0;
        $parcial->mejoras = 5;
        $parcial->ruta = "C:\\Users\\omner\\Desktop";
        $parcial->save();

        $parcial = new Primero();
        $parcial->consecutivo = 1;
        $parcial->puntualidad = 9;
        $parcial->conocimiento = 15;
        $parcial->equipo = 10;
        $parcial->dedicado = 18;
        $parcial->orden = 17;
        $parcial->mejoras = 15;
        $parcial->ruta = "C:\\Users\\jorge\\Pictures";
        $parcial->save(); 

        $parcial = new Segundo();
        $parcial->consecutivo = 2;
        $parcial->puntualidad = 10;
        $parcial->conocimiento = 10;
        $parcial->equipo = 10;
        $parcial->dedicado = 10;
        $parcial->orden = 10;
        $parcial->mejoras = 10;
        $parcial->ruta = "C:\\Users\\jorge\\Pictures";
        $parcial->save(); 
    }
}
