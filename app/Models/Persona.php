<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'titulo',
        'acerca_de',
        'foto_perfil',
        'banner',
        'email',
        'telefono',
        'ubicacion'
    ];

    public function experiencias()
    {
        return $this->hasMany(Experiencia::class);
    }

    public function educacions()
    {
        return $this->hasMany(Educacion::class);
    }

    public function habilidads()
    {
        return $this->hasMany(Habilidad::class);
    }

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }

    public function redSocials()
    {
        return $this->hasMany(RedSocial::class);
    }
}