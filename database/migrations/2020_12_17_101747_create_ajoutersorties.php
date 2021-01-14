<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjoutersorties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajoutersorties', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('quan');
			$table->string('code_mat',500);
			$table->string('dest',500);
			$table->string('proo',500);
			$table->string('envoye',500);
			$table->string('chauf',500);
			$table->string('rec',500);
			$table->string('type_sortie',500);
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ajoutersorties');
    }
}
