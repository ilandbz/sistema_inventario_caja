<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


/**
 * Generado por Database Modeler Lite
 * https://play.google.com/store/apps/details?id=adrian.adbm
 *
 * Creado: 23 jun. 2023
*/

class CreatePersonasTable extends Migration {

    public function up() {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            //$table->string('tipo_documento_id', 15)->nullable();
            $table->string('numero_ documento', 15)->nullable();
            $table->string('nombres', 191)->nullable();
            $table->string('apellidos', 191)->nullable();
            $table->string('telefono', 45)->nullable();
            $table->string('direccion', 191)->nullable();
            $table->string('email', 191)->nullable();
        });
    }

    public function down() {
        Schema::dropIfExists('persona');
    }
}
