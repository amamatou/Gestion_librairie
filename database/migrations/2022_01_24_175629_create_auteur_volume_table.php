<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuteurVolumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auteur_volume', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('auteur_id');
            $table->foreign('auteur_id')
                ->references('id')
                ->on('auteurs')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->unsignedBigInteger('volume_id');
            $table->foreign('volume_id')
                ->references('id')
                ->on('volumes')
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
        Schema::dropIfExists('auteur__volumes');
    }
}
