<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RedSocial extends Model
{
    protected $table = 'redes_sociales';
    protected $fillable = [
        'nombre',
        'icono',
        'url',
        'persona_id'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}
