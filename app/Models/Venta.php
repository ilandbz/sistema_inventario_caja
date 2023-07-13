<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'cliente_id','user_id','fecha_venta', 'sub_total',
        'igv','total','estado'
    ];

    /**
     * Get the user that owns the Venta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get all of the detalle_ventas for the Venta
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalle_ventas(): HasMany
    {
        return $this->hasMany(DetalleVenta::class);
    }
}
