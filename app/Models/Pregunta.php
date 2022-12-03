<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $fillable = [
        'detalle',
    ];
    public function evaluacion()
    {
        return $this->hasMany(Evaluacion::class);
    }
}
