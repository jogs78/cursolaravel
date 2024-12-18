<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    use HasFactory;

    protected $table = "coordinadores";

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}
