<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBtinetrenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('btinetrenes', function (Blueprint $table) {
           $table->increments('id');
			$table->integer('numero');
			$table->string('proprietaire',500);
			$table->string('destination',500);
			$table->string('reference',500);
			$table->integer('valider');
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
        Schema::dropIfExists('btinetrenes');
    }
}
