<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volumes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("nombrePages");
            $table->unsignedBigInteger("isbn")->unique();

            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')
                ->references('id')
                ->on('documents')
                ->onDelete('restrict')
                ->onUpdate('restrict');

                $table->unsignedBigInteger('categorie_id');
                $table->foreign('categorie_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');

                $table->unsignedBigInteger('auteur_id');
                $table->foreign('auteur_id')
                ->references('id')
                ->on('auteurs')
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
        Schema::dropIfExists('volumes');
    }
}
