<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
                  Schema::create('producto', function (Blueprint $table) {
            $table->id('pro_id');
            $table->string('pro_nombre');
            $table->string('pro_precio');
                 $table->foreignId('prov_id')->references('prov_id')->on('proveedor');
          
           
           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('producto');
    }
}
