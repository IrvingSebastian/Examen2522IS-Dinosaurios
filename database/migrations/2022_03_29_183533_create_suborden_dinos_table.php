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
        Schema::create('suborden_dinos', function (Blueprint $table) {
            $table->id('ID');
            $table->unsignedBigInteger('ID_Orden');
            $table->foreign('ID_Orden')->references('ID')->on('orden_dinos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Nombre', 1000);
            $table->string('Descripción', 1000);
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
        Schema::dropIfExists('suborden_dinos');
    }
};
