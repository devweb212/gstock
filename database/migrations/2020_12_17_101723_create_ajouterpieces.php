<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjouterpieces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	 

	 
    public function up()
    {
        Schema::create('ajouterpieces', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('id_piece');
			$table->integer('quantite');
			$table->string('bl',500);
			$table->string('forn',500);
			$table->integer('equiv');
			$table->integer('unite');
			$table->string('obser',500);
			$table->integer('typeb');
			$table->string('code_bar',500);
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
        Schema::dropIfExists('ajouterpieces');
    }
}
