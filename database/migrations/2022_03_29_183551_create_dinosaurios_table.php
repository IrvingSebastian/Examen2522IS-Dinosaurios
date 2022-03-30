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

        Schema::create('dinosaurios', function (Blueprint $table) {
            $table->id('ID');
            $table->unsignedBigInteger('ID_Suborden');
            $table->foreign('ID_Suborden')->references('ID')->on('suborden_dinos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Nombre', 100);
            $table->string('Alimentación', 100);
            $table->string('Dimensiones', 100);
            $table->string('Ubicación Geográfica', 100);
            $table->string('Descripción', 100);
            $table->string('Imagen', 100);
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
        Schema::dropIfExists('dinosaurios');
    }
};
