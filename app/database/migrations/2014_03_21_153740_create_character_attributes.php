<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterAttributes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('character_attributes', function(Blueprint $table)
		{
			$table->integer('character_id')->references('character_id')->on('characters');
			$table->integer('attribute_key')->references('key')->on('attributes');
            $table->integer('points');
            $table->integer('modifier');
			$table->primary(array('character_id', 'attribute_key'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('character_attributes');
	}

}
