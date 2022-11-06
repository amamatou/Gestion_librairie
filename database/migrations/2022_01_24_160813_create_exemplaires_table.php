<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExemplairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exemplaires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('etat', array('bon', 'moyen', 'mauvais'))->default('bon');
            $table->boolean('disponibilite')->default(true);


            $table->unsignedBigInteger('volume_id');
            $table->foreign('volume_id')
            ->references('id')
            ->on('volumes')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->unsignedBigInteger('etagere_id');
            $table->foreign('etagere_id')
            ->references('id')
            ->on('etageres')
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
        Schema::dropIfExists('exemplaires');
    }
}
