<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleventaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventa', function (Blueprint $table) {
            $table->id();
            $table->decimal('precio', 10,2);
			$table->integer('cantidad');
        
            $table->unsignedBigInteger('venta_id');
            $table->foreign('venta_id')->references('id')->on('ventas');

            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleventa');
    }
}
