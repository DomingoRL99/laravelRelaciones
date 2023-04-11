<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nota extends Model
{
    public function asignaturas()
    {
        return $this->belongsTo(Asignatura::class);
    }

    public function alumnos()
    {
        return $this->belongsTo(Alumno::class);
    }
}
