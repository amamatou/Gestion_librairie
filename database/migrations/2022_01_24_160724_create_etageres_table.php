<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtageresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etageres', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom")->default('etagere 1');

            $table->unsignedBigInteger('rayon_id');
            $table->foreign('rayon_id')
                ->references('id')
                ->on('rayons')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etageres');
    }
}
