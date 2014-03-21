<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterClasses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('character_classes', function(Blueprint $table)
		{
            $table->integer('character_id')->references('character_id')->on('characters');
            $table->integer('class_id')->references('class_id')->on('classes');
            $table->integer('level');
            $table->boolean('favored');
            $table->primary(array('character_id', 'class_id'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('character_classes');
	}

}
