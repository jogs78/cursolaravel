<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    
    protected $fillable = ["nombre","apellido_paterno","apellido_materno","correo_electronico","numero_de_control",
                            "proyecto_id","telefono","carrera_id","direccion","institucion_seguridad_social",
                            "numero_de_seguridad_social"
                        ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function carrera()
    {
        //Estudiante tiene carrera_id
        return $this->belongsTo(Carrera::class);
    }

    public function parciales(){
        //Parcial tiene estudiante_id
        return $this->hasMany(Parcial::class);
    }
    
}
