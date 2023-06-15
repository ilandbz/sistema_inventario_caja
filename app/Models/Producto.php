<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id', 'tipo_id','categoria_id', 'nombre',
        'precio', 'cantidad', 'fecha_vencimiento'
    ];
}
