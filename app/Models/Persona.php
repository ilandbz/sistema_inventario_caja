<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_documento','nombres','apellidos','telefono','direccion',
        'email'
    ];

    /**
     * Get the cliente associated with the Persona
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente(): HasOne
    {
        return $this->hasOne(Cliente::class);
    }
}
