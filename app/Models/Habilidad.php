<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    protected $table = 'habilidades';
    
    protected $fillable = [
        'nombre',
        'porcentaje',
        'persona_id'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}