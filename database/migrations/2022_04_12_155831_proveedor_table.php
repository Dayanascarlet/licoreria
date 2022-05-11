<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('proveedor', function (Blueprint $table) {
            $table->id('prov_id');
            $table->string('prov_nombre');
            $table->string('prov_apellido');
            $table->string('prov_cedula');
            $table->string('prov_ruc');

           
           
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('proveedor');
    }
}