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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('ID');
            $table->unsignedBigInteger('ID_Publi');
            $table->foreign('ID_Publi')->references('ID')->on('publicaciones')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Nombre', 100);
            $table->string('Email', 100);
            $table->string('Comentario', 500);
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
        Schema::dropIfExists('comentarios');
    }
};
