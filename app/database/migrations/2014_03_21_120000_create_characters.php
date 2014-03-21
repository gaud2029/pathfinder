<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacters extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('characters', function(Blueprint $table)
		{
			$table->increments('character_id');
            $table->integer('user_id')->references('user_id')->on('users');
            $table->string('name');
            $table->integer('race_id')->references('race_id')->on('races');
            $table->string('gender', 1);
            $table->integer('allignment_id')->references('allignment_id')->on('allignments');
            $table->integer('level');
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
		Schema::drop('characters');
	}

}
