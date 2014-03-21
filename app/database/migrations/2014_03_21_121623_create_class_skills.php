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
			$table->integer('class_id')->references('class_id')->on('classes');
			$table->integer('skill_id')->references('skill_id')->on('skills');
            $table->primary(array('class_id', 'skill_id'));
		});

        DB::table('class_skills')->insert(array(
            // Barbarian
            array('class_id' => 1, 'skill_id' => 1),
            array('class_id' => 1, 'skill_id' => 4),
            array('class_id' => 1, 'skill_id' => 5),
            array('class_id' => 1, 'skill_id' => 11),
            array('class_id' => 1, 'skill_id' => 13),
            array('class_id' => 1, 'skill_id' => 20),
            array('class_id' => 1, 'skill_id' => 25),
            array('class_id' => 1, 'skill_id' => 28),
            array('class_id' => 1, 'skill_id' => 33),
            array('class_id' => 1, 'skill_id' => 34),
            // Bard
            array('class_id' => 2, 'skill_id' => 1),
            array('class_id' => 2, 'skill_id' => 2),
            array('class_id' => 2, 'skill_id' => 3),
            array('class_id' => 2, 'skill_id' => 4),
            array('class_id' => 2, 'skill_id' => 5),
            array('class_id' => 2, 'skill_id' => 6),
            array('class_id' => 2, 'skill_id' => 8),
            array('class_id' => 2, 'skill_id' => 9),
            array('class_id' => 2, 'skill_id' => 13),
            array('class_id' => 2, 'skill_id' => 14),
            array('class_id' => 2, 'skill_id' => 15),
            array('class_id' => 2, 'skill_id' => 16),
            array('class_id' => 2, 'skill_id' => 17),
            array('class_id' => 2, 'skill_id' => 18),
            array('class_id' => 2, 'skill_id' => 19),
            array('class_id' => 2, 'skill_id' => 20),
            array('class_id' => 2, 'skill_id' => 21),
            array('class_id' => 2, 'skill_id' => 22),
            array('class_id' => 2, 'skill_id' => 23),
            array('class_id' => 2, 'skill_id' => 24),
            array('class_id' => 2, 'skill_id' => 25),
            array('class_id' => 2, 'skill_id' => 26),
            array('class_id' => 2, 'skill_id' => 27),
            array('class_id' => 2, 'skill_id' => 29),
            array('class_id' => 2, 'skill_id' => 30),
            array('class_id' => 2, 'skill_id' => 31),
            array('class_id' => 2, 'skill_id' => 32),
            array('class_id' => 2, 'skill_id' => 35),
            // Cleric
            array('class_id' => 3, 'skill_id' => 2),
            array('class_id' => 3, 'skill_id' => 5),
            array('class_id' => 3, 'skill_id' => 6),
            array('class_id' => 3, 'skill_id' => 12),
            array('class_id' => 3, 'skill_id' => 14),
            array('class_id' => 3, 'skill_id' => 18),
            array('class_id' => 3, 'skill_id' => 21),
            array('class_id' => 3, 'skill_id' => 22),
            array('class_id' => 3, 'skill_id' => 23),
            array('class_id' => 3, 'skill_id' => 24),
            array('class_id' => 3, 'skill_id' => 27),
            array('class_id' => 3, 'skill_id' => 29),
            array('class_id' => 3, 'skill_id' => 31),
            // Druid
            array('class_id' => 4, 'skill_id' => 4),
            array('class_id' => 4, 'skill_id' => 5),
            array('class_id' => 4, 'skill_id' => 10),
            array('class_id' => 4, 'skill_id' => 11),
            array('class_id' => 4, 'skill_id' => 12),
            array('class_id' => 4, 'skill_id' => 17),
            array('class_id' => 4, 'skill_id' => 20),
            array('class_id' => 4, 'skill_id' => 25),
            array('class_id' => 4, 'skill_id' => 27),
            array('class_id' => 4, 'skill_id' => 28),
            array('class_id' => 4, 'skill_id' => 31),
            array('class_id' => 4, 'skill_id' => 33),
            array('class_id' => 4, 'skill_id' => 34),
            // Fighter
            array('class_id' => 5, 'skill_id' => 4),
            array('class_id' => 5, 'skill_id' => 5),
            array('class_id' => 5, 'skill_id' => 11),
            array('class_id' => 5, 'skill_id' => 13),
            array('class_id' => 5, 'skill_id' => 15),
            array('class_id' => 5, 'skill_id' => 16),
            array('class_id' => 5, 'skill_id' => 27),
            array('class_id' => 5, 'skill_id' => 28),
            array('class_id' => 5, 'skill_id' => 33),
            array('class_id' => 5, 'skill_id' => 34),
            // Monk
            array('class_id' => 6, 'skill_id' => 1),
            array('class_id' => 6, 'skill_id' => 4),
            array('class_id' => 6, 'skill_id' => 5),
            array('class_id' => 6, 'skill_id' => 9),
            array('class_id' => 6, 'skill_id' => 13),
            array('class_id' => 6, 'skill_id' => 18),
            array('class_id' => 6, 'skill_id' => 23),
            array('class_id' => 6, 'skill_id' => 25),
            array('class_id' => 6, 'skill_id' => 26),
            array('class_id' => 6, 'skill_id' => 27),
            array('class_id' => 6, 'skill_id' => 28),
            array('class_id' => 6, 'skill_id' => 29),
            array('class_id' => 6, 'skill_id' => 32),
            // Paladin
            array('class_id' => 7, 'skill_id' => 5),
            array('class_id' => 7, 'skill_id' => 6),
            array('class_id' => 7, 'skill_id' => 11),
            array('class_id' => 7, 'skill_id' => 12),
            array('class_id' => 7, 'skill_id' => 21),
            array('class_id' => 7, 'skill_id' => 23),
            array('class_id' => 7, 'skill_id' => 27),
            array('class_id' => 7, 'skill_id' => 28),
            array('class_id' => 7, 'skill_id' => 29),
            array('class_id' => 7, 'skill_id' => 31),
            // Ranger
            array('class_id' => 8, 'skill_id' => 4),
            array('class_id' => 8, 'skill_id' => 5),
            array('class_id' => 8, 'skill_id' => 11),
            array('class_id' => 8, 'skill_id' => 12),
            array('class_id' => 8, 'skill_id' => 13),
            array('class_id' => 8, 'skill_id' => 15),
            array('class_id' => 8, 'skill_id' => 17),
            array('class_id' => 8, 'skill_id' => 20),
            array('class_id' => 8, 'skill_id' => 25),
            array('class_id' => 8, 'skill_id' => 27),
            array('class_id' => 8, 'skill_id' => 28),
            array('class_id' => 8, 'skill_id' => 31),
            array('class_id' => 8, 'skill_id' => 32),
            array('class_id' => 8, 'skill_id' => 33),
            array('class_id' => 8, 'skill_id' => 34),
            // Rogue
            array('class_id' => 9, 'skill_id' => 1),
            array('class_id' => 9, 'skill_id' => 2),
            array('class_id' => 9, 'skill_id' => 3),
            array('class_id' => 9, 'skill_id' => 4),
            array('class_id' => 9, 'skill_id' => 5),
            array('class_id' => 9, 'skill_id' => 6),
            array('class_id' => 9, 'skill_id' => 7),
            array('class_id' => 9, 'skill_id' => 8),
            array('class_id' => 9, 'skill_id' => 9),
            array('class_id' => 9, 'skill_id' => 13),
            array('class_id' => 9, 'skill_id' => 15),
            array('class_id' => 9, 'skill_id' => 19),
            array('class_id' => 9, 'skill_id' => 24),
            array('class_id' => 9, 'skill_id' => 25),
            array('class_id' => 9, 'skill_id' => 26),
            array('class_id' => 9, 'skill_id' => 27),
            array('class_id' => 9, 'skill_id' => 29),
            array('class_id' => 9, 'skill_id' => 30),
            array('class_id' => 9, 'skill_id' => 32),
            array('class_id' => 9, 'skill_id' => 33),
            array('class_id' => 9, 'skill_id' => 34),
            // Sorcerer
            array('class_id' => 10, 'skill_id' => 2),
            array('class_id' => 10, 'skill_id' => 3),
            array('class_id' => 10, 'skill_id' => 5),
            array('class_id' => 10, 'skill_id' => 10),
            array('class_id' => 10, 'skill_id' => 13),
            array('class_id' => 10, 'skill_id' => 14),
            array('class_id' => 10, 'skill_id' => 27),
            array('class_id' => 10, 'skill_id' => 31),
            array('class_id' => 10, 'skill_id' => 35),
            // Wizard
            array('class_id' => 11, 'skill_id' => 2),
            array('class_id' => 11, 'skill_id' => 5),
            array('class_id' => 11, 'skill_id' => 10),
            array('class_id' => 11, 'skill_id' => 14),
            array('class_id' => 11, 'skill_id' => 15),
            array('class_id' => 11, 'skill_id' => 16),
            array('class_id' => 11, 'skill_id' => 17),
            array('class_id' => 11, 'skill_id' => 18),
            array('class_id' => 11, 'skill_id' => 19),
            array('class_id' => 11, 'skill_id' => 20),
            array('class_id' => 11, 'skill_id' => 21),
            array('class_id' => 11, 'skill_id' => 22),
            array('class_id' => 11, 'skill_id' => 23),
            array('class_id' => 11, 'skill_id' => 24),
            array('class_id' => 11, 'skill_id' => 27),
            array('class_id' => 11, 'skill_id' => 31),
        ));
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
