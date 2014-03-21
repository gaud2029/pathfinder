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
            $table->integer('class_skill')->default(0);
            $table->integer('ranks')->default(0);
            $table->integer('racial_or_feats_bonus')->default(0);
            $table->integer('misc')->default(0);
            $table->integer('ac_penalty')->default(0);
            $table->integer('total_skill_bonus');
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
