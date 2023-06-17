<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialCaja extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_apertura', 'monto_apertura',
        'fecha_cierre', 'monto_cierre', 'estado'
    ];
}
