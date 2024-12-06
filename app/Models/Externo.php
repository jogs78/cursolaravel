<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Externo extends Model
{
    use HasFactory;

    public function proyectos($periodo_id)
    {
        return $this->hasMany(Proyecto::class)->where('periodo_id', $periodo_id);
    }

}
