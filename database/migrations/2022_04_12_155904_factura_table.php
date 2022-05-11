<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
                Schema::create('factura', function (Blueprint $table) {
            $table->id('fac_id');
            $table->string('pro_nombre');
            $table->string('fac_cantidad');
            $table->string('fac_detalle');
            $table->string('fac_iva');
            $table->string('fac_total');
                 $table->foreignId('prov_id')->references('prov_id')->on('proveedor');
                 $table->foreignId('usu_id')->references('usu_id')->on('users');
                 $table->foreignId('pro_id')->references('pro_id')->on('producto');
          
           
           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::dropIfExists('factura');
    }
}
