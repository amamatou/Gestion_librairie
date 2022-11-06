<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpruntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprunts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('dateRetour')->nullable();
            $table->enum('etat_exemplaire', array('bon', 'moyen', 'mauvais'))->default('bon');
            $table->enum('statut', array('en cours', 'depasse' ,'remis'))->default('en cours');


                $table->unsignedBigInteger('exemplaire_id');
                $table->foreign('exemplaire_id')
                ->references('id')
                ->on('exemplaires')
                ->onDelete('cascade')
                ->onUpdate('cascade');

                    $table->unsignedBigInteger('abonne_id');
                    $table->foreign('abonne_id')
                    ->references('id')
                    ->on('abonnes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprunts');
    }
}
