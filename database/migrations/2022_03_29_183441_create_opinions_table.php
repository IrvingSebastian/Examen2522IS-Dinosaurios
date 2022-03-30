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

        Schema::create('opiniones', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Nombre', 100);
            $table->string('Email', 100);
            $table->string('Asunto', 100);
            $table->string('Mensaje', 300);
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
        Schema::dropIfExists('opiniones');
    }
};
