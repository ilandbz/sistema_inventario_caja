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

class CreateDetalleVentasTable extends Migration {

    public function up() {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('venta_id')->nullable()->unsigned();
            $table->integer('cantidad')->nullable();
            $table->float('precio_unidad', 18, 2)->nullable();
            $table->float('importe', 18, 2)->nullable();
            $table->foreign('venta_id')->references('id')->on('ventas');
        });
    }

    public function down() {
        Schema::table('ventas', function (Blueprint $table) {
            $table->dropForeign(['venta_id']);
        });
        Schema::dropIfExists('detalle_ventas');
    }
}
