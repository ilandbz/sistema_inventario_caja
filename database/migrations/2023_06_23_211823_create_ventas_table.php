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

class CreateVentasTable extends Migration {

    public function up() {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cliente_id')->nullable()->unsigned();
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->dateTime('fecha_venta')->nullable();
            $table->decimal('sub_total', 18, 2)->nullable();
            $table->decimal('igv', 18, 2)->nullable();
            $table->decimal('total', 18, 2)->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down() {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign(['cliente_id']);
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('ventas');
    }
}
