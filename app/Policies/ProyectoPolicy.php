<?php

namespace App\Policies;

use App\Models\Proyecto;
use App\Models\Usuario;
use Illuminate\Auth\Access\Response;

class ProyectoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Usuario $actual): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Usuario $actual, Proyecto $proyecto): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Usuario $actual): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Usuario $actual, Proyecto $proyecto): bool
    {
        if($actual->usa_type == "App\Models\Estudiante" && $proyecto->estudiantes->pluck('id')->contains($actual->usa_id)) return true;
        if($actual->usa_type == "App\Models\Coordiandor" && $actual->usa->carrera_id == $proyecto->estudiantes[0]->carrera->id ) return true;
        return false;

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Usuario $actual, Proyecto $proyecto): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Usuario $actual, Proyecto $proyecto): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Usuario $actual, Proyecto $proyecto): bool
    {
        //
    }
}
