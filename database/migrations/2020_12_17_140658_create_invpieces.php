<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvpieces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invpieces', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name_piece',500);
			$table->string('ref',500);
			$table->integer('unite');
			$table->integer('inventaire');
			$table->integer('equiv');
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
        Schema::dropIfExists('invpieces');
    }
}
