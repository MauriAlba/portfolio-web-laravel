<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Educacion extends Model
{
    protected $table = 'educaciones';
    
    protected $fillable = [
        'institucion',
        'titulo',
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
