<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandeDessinneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bande_dessinnees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('volume_id');
            $table->foreign('volume_id')
                ->references('id')
                ->on('volumes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

                $table->unsignedBigInteger('dessinateur_id');
                $table->foreign('dessinateur_id')
                    ->references('id')
                    ->on('personnes')
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
        Schema::dropIfExists('bande_dessinnees');
    }
}
