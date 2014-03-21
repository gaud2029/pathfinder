<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassSkills extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('class_skills', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->integer('class_id')->references('class_id')->on('classes');
			$table->integer('skill_id')->references('skill_id')->on('skills');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('class_skills');
	}

}
