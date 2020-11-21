<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create('productos', function (Blueprint $table) {
            /* $table->increments('id');
            $table->string('Nombre');
            $table->integer('Cantidad');
            $table->unsignedInteger('categorias_id');
            $table->foreign('categorias_id')->references('id')->on('categorias');
            $table->boolean('Status');
            $table->string('Imagen');
            $table->timestamps(); */


            $table->increments('id');
            $table->string('Nombre');
            $table->unsignedInteger('categorias_id');
            $table->foreign('categorias_id')->references('id')->on('categorias');
            $table->string('Descripcion');
            $table->string('Foto');
            $table->bigInteger('cantidad')->unisigned()->default(0);
            $table->decimal('Precio',12,2)->default(0);
            $table->string('Estado');
            //$table->string('categoria');
            $table->char('Activo',2);

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
        Schema::dropIfExists('productos');
    }
}
