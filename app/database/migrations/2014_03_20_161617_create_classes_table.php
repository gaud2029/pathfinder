<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Pathfinder\Race;

class CreateClassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name')->unique();
            $table->string('description');
			$table->string('size');
			$table->smallInteger('speed');
            $table->string('attribute_modifiers');
		});

        Race::create(array(
            'name' => 'Dwarf',
            'description' => 'These short and stocky defenders of mountain fortresses are often seen as stern and humorless. Known for mining the earth’s treasures and crafting magnificent items from ore and gemstones, they have an unrivaled affinity for the bounties of the deep earth. Dwarves also have a tendency toward traditionalism and isolation that sometimes manifests as xenophobia.',
            'size' => 'M',
            'speed' => 20,
            'attribute_modifiers' => 'CON:+2,WIS:+2,CHA:-2',
        ))->save();

        Race::create(array(
            'name' => 'Elf',
            'description' => 'Tall, noble, and often haughty, elves are long-lived and subtle masters of the wilderness. Elves excel in the arcane arts. Often they use their intrinsic link to nature to forge new spells and create wondrous items that, like their creators, seem nearly impervious to the ravages of time. A private and often introverted race, elves can give the impression they are indifferent to the plights of others.',
            'size' => 'L',
            'speed' => 30,
            'attribute_modifiers' => 'DEX:+2,INT:+2,CON:-2',
        ))->save();
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('classes');
	}

}
