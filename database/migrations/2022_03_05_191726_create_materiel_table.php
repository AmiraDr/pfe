<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterielTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiel', function (Blueprint $table) {
            $table->id();
            $table->scat_id();
            $table->VARCHAR(matricule);
            $table->strind(nom);
            $table->VARCHAR(marque);
            $table->DATETIME(date_Achat);
            $table->DATETIME(date_fin_garanti);
            $table->VARCHAR(duree_vie_estmée);
            $table->VARCHAR(manuel_maintenance);
        });
    }
    /**      
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiel');
    }
}
