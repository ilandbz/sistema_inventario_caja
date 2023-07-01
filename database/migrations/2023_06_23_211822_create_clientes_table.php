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

class CreateClientesTable extends Migration {

    public function up() {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('persona_id')->nullable()->unsigned();
            $table->foreign('persona_id')->references(' id')->on('personas');
        });
    }

    public function down() {
        Schema::table('persona', function (Blueprint $table) {
            $table->dropForeign(['persona_id']);
        });
        Schema::dropIfExists('clientes');
    }
}
