<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWeapons extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('weapons', function(Blueprint $table)
		{
			$table->increments('weapon_id');
			$table->string('name')->unique();
			$table->string('category');
			$table->string('subcategory');
			$table->string('description');
			$table->double('cost');
			$table->string('dmg_small');
			$table->string('dmg_medium');
			$table->string('critical');
			$table->integer('range');
			$table->integer('weight_small');
			$table->integer('weight_medium');
			$table->string('type');
			$table->string('special');
		});

        DB::table('leadership')->insert(array(array(
            'name' => 'Gauntlet',
            'category' => 'Simple Weapons',
            'subcategory' => 'Unarmed Attacks',
            'description' => 'This metal glove lets you deal lethal damage rather than nonlethal damage with unarmed strikes. A strike with a gauntlet is otherwise considered an unarmed attack. The cost and weight given are for a single gauntlet. Medium and heavy armors (except breastplate) come with gauntlets. Your opponent cannot use a disarm action to disarm you of gauntlets.',
            'cost' => 2,
            'dmg_small' => '1d2',
            'dmg_medium' => '1d3',
            'critical' => 'x2',
            'range' => null,
            'weight_small' => 0.5,
            'weight_medium' => 1,
            'type' => 'B',
            'special' => '',
        ), array(
            'name' => 'Unarmed strike',
            'category' => 'Simple Weapons',
            'subcategory' => 'Unarmed Attacks',
            'description' => 'A Medium character deals 1d3 points of nonlethal damage with an unarmed strike. A Small character deals 1d2 points of nonlethal damage. A monk or any character with the Improved Unarmed Strike feat can deal lethal or nonlethal damage with unarmed strikes, at his discretion. The damage from an unarmed strike is considered weapon damage for the purposes of effects that give you a bonus on weapon damage rolls. An unarmed strike is always considered a light weapon. Therefore, you can use the Weapon Finesse feat to apply your Dexterity modifier instead of your Strength modifier to attack rolls with an unarmed strike. Unarmed strikes do not count as natural weapons (see Combat).',
            'cost' => 0,
            'dmg_small' => '1d2',
            'dmg_medium' => '1d3',
            'critical' => 'x2',
            'range' => null,
            'weight_small' => null,
            'weight_medium' => null,
            'type' => 'B',
            'special' => 'nonlethal',
        ), array(
            'name' => 'Dagger',
            'category' => 'Simple Weapons',
            'subcategory' => 'Light Melee Weapons',
            'description' => "A dagger has a blade that is about 1 foot in length. You get a +2 bonus on Sleight of Hand skill checks made to conceal a dagger on your body (see Using Skills).",
            'cost' => 2,
            'dmg_small' => '1d3',
            'dmg_medium' => '1d4',
            'critical' => '19-20 / x2',
            'range' => 10,
            'weight_small' => 0.5,
            'weight_medium' => 1,
            'type' => 'P or S',
            'special' => '',
        ), array(
            'name' => 'Punching Dagger',
            'category' => 'Simple Weapons',
            'subcategory' => 'Light Melee Weapons',
            'description' => "A punching dagger's blade is attached to a horizontal handle that projects out from the fist when held.",
            'cost' => 2,
            'dmg_small' => '1d3',
            'dmg_medium' => '1d4',
            'critical' => 'x3',
            'range' => null,
            'weight_small' => 0.5,
            'weight_medium' => 1,
            'type' => 'P',
            'special' => '',
        ), array(
            'name' => 'Spiked Gauntlet',
            'category' => 'Simple Weapons',
            'subcategory' => 'Light Melee Weapons',
            'description' => "The cost and weight given are for a single gauntlet. An attack with a spiked gauntlet is considered an armed attack. Your opponent cannot use a disarm action to disarm you of spiked gauntlets.",
            'cost' => 5,
            'dmg_small' => '1d3',
            'dmg_medium' => '1d4',
            'critical' => 'x2',
            'range' => null,
            'weight_small' => 0.5,
            'weight_medium' => 1,
            'type' => 'P',
            'special' => '',
        ), array(
            'name' => 'Light Mace',
            'category' => 'Simple Weapons',
            'subcategory' => 'Light Melee Weapons',
            'description' => "A mace is made up of an ornate metal head attached to a simple wooden or metal shaft.",
            'cost' => 5,
            'dmg_small' => '1d4',
            'dmg_medium' => '1d6',
            'critical' => 'x2',
            'range' => null,
            'weight_small' => 2,
            'weight_medium' => 4,
            'type' => 'B',
            'special' => '',
        ), array(
            'name' => 'Sickle',
            'category' => 'Simple Weapons',
            'subcategory' => 'Light Melee Weapons',
            'description' => "S sickle is a short, curved blade attached to a simple handle.",
            'cost' => 6,
            'dmg_small' => '1d4',
            'dmg_medium' => '1d6',
            'critical' => 'x2',
            'range' => null,
            'weight_small' => 1,
            'weight_medium' => 2,
            'type' => 'S',
            'special' => 'trip',
        ), array(
            'name' => 'Club',
            'category' => 'Simple Weapons',
            'subcategory' => 'One-Handed Melee Weapons',
            'description' => "",
            'cost' => 0,
            'dmg_small' => '1d4',
            'dmg_medium' => '1d6',
            'critical' => 'x2',
            'range' => 10,
            'weight_small' => 1.5,
            'weight_medium' => 3,
            'type' => 'B',
            'special' => '',
        ), array(
            'name' => 'Heavy Mace',
            'category' => 'Simple Weapons',
            'subcategory' => 'One-Handed Melee Weapons',
            'description' => "",
            'cost' => 12,
            'dmg_small' => '1d6',
            'dmg_medium' => '1d8',
            'critical' => 'x2',
            'range' => null,
            'weight_small' => 4,
            'weight_medium' => 8,
            'type' => 'B',
            'special' => '',
        ), array(
            'name' => 'Morningstar',
            'category' => 'Simple Weapons',
            'subcategory' => 'One-Handed Melee Weapons',
            'description' => "",
            'cost' => 8,
            'dmg_small' => '1d6',
            'dmg_medium' => '1d8',
            'critical' => 'x2',
            'range' => null,
            'weight_small' => 3,
            'weight_medium' => 6,
            'type' => 'B and P',
            'special' => '',
        ), array(
            'name' => 'Shortspear',
            'category' => 'Simple Weapons',
            'subcategory' => 'One-Handed Melee Weapons',
            'description' => "",
            'cost' => 1,
            'dmg_small' => '1d4',
            'dmg_medium' => '1d6',
            'critical' => 'x2',
            'range' => 20,
            'weight_small' => 1.5,
            'weight_medium' => 3,
            'type' => 'P',
            'special' => '',
        ), array(
            'name' => 'Longspear',
            'category' => 'Simple Weapons',
            'subcategory' => 'Two-Handed Melee Weapons',
            'description' => "",
            'cost' => ,
            'dmg_small' => '',
            'dmg_medium' => '',
            'critical' => 'x2',
            'range' => null,
            'weight_small' => ,
            'weight_medium' => ,
            'type' => '',
            'special' => '',
        ), array(
            'name' => '',
            'category' => 'Simple Weapons',
            'subcategory' => 'Two-Handed Melee Weapons',
            'description' => "",
            'cost' => ,
            'dmg_small' => '',
            'dmg_medium' => '',
            'critical' => 'x2',
            'range' => null,
            'weight_small' => ,
            'weight_medium' => ,
            'type' => '',
            'special' => '',
        ), array(
            'name' => '',
            'category' => 'Simple Weapons',
            'subcategory' => 'Two-Handed Melee Weapons',
            'description' => "",
            'cost' => ,
            'dmg_small' => '',
            'dmg_medium' => '',
            'critical' => 'x2',
            'range' => null,
            'weight_small' => ,
            'weight_medium' => ,
            'type' => '',
            'special' => '',
        ), array(
            'name' => '',
            'category' => 'Simple Weapons',
            'subcategory' => 'Two-Handed Melee Weapons',
            'description' => "",
            'cost' => ,
            'dmg_small' => '',
            'dmg_medium' => '',
            'critical' => 'x2',
            'range' => null,
            'weight_small' => ,
            'weight_medium' => ,
            'type' => '',
            'special' => '',
        )));
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('weapons');
	}

}
