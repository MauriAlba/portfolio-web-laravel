<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $table = 'experiencias';
    protected $fillable = [
        'empresa',
        'puesto',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'logo',
        'persona_id'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}