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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_id')->nullable()->constrained('tipo_productos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('categoria_id')->nullable()->constrained('categorias')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nombre');
            $table->decimal('precio',18,2);
            $table->integer('cantidad');
            $table->date('fecha_vencimiento')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
