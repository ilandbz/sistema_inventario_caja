<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historial_cajas', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha_apertura')->nullable();
            $table->decimal('monto_apertura',18,2)->nullable();
            $table->datetime('fecha_cierre')->nullable();
            $table->decimal('monto_cierre',18,2)->nullable();
            $table->unsignedTinyInteger('estado')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_cajas');
    }
};
