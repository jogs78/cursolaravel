<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ultimo extends Model
{
    use HasFactory;

    public function seguimiento()
    {
        return $this->belongsTo(Seguimiento::class);
    }
}
