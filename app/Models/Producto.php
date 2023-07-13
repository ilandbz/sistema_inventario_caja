<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id', 'tipo_id','categoria_id', 'nombre',
        'precio', 'cantidad', 'fecha_vencimiento'
    ];

    /**
     * Get all of the detalle_ventas for the Producto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalle_ventas(): HasMany
    {
        return $this->hasMany(DetalleVenta::class);
    }
}
