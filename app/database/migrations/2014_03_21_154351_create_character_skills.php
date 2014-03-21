<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterSkills extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('character_skills', function(Blueprint $table)
		{
            $table->integer('character_id')->references('character_id')->on('characters');
            $table->integer('skill_id')->references('skill_id')->on('skills');
            $table->integer('attribute_modifier');
            $table->integer('class_skill');
            $table->integer('ranks');
            $table->integer('racial_or_feats_bonus');
            $table->integer('misc');
            $table->integer('ac_penalty');
            $table->primary(array('character_id', 'skill_id'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('character_skills');
	}

}
