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
        date_default_timezone_set('America/Mexico_City');
        
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Titulo', 100);
            $table->string('Autor', 100);
            $table->string('Contenido', 5000);
            $table->string('Imagen', 100);
            $table->string('Resumen', 100);
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
