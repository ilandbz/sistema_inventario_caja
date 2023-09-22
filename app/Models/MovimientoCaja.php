<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MovimientoCaja extends Model
{
    use HasFactory;
    protected $fillable=['fechahora', 'user_id', 'tipo', 'descripcion', 'monto'];

    public function usuario() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
