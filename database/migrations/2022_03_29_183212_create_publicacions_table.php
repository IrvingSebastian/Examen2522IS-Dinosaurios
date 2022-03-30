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
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Titulo', 1000);
            $table->string('Autor', 1000);
            $table->string('Contenido', 5000);
            $table->string('Imagen', 1000);
            $table->string('Resumen', 1000);
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
        Schema::dropIfExists('publicaciones');
    }
};
