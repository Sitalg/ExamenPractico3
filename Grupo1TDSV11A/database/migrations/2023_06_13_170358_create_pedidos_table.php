<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('Id_Pedido');
            $table->date('FechaPedido');
            $table->date('FechaEntrega');
            $table->string('Observaciones', 150);
            $table->bigInteger('Id_Cliente')->unsigned(); //para la llave foranea
            $table->foreign('Id_Cliente')->references('Id_Cliente')->on('clientes'); //relacion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
