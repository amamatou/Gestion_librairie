<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('enfants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('niveauScolaire');
            $table->string('etablissement');
            
            $table->unsignedBigInteger("titulaire_id");
            $table->foreign('titulaire_id')
                  ->references('id')
                  ->on('personnes')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->unsignedBigInteger('abonne_id');
            $table->foreign('abonne_id')
                ->references('id')
                ->on('abonnes')
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
        Schema::dropIfExists('enfants');
    }
}
