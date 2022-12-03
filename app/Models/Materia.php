<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class);
    }

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }


}
