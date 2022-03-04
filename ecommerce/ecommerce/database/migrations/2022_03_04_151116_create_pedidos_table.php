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
            
            $table->id();
            $table->integer('id_reservado')->unisgned();
            $table->bigInteger('id_usuario')->unsigned();
            $table->bigInteger('id_produto')->unsigned();
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('users'); 
            $table->foreign('id_produto')->references('id')->on('produtos');

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
