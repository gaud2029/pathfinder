<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRaces extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('races', function(Blueprint $table)
		{
			$table->increments('race_id');
            $table->string('name')->unique();
            $table->string('description');
			$table->string('size');
			$table->smallInteger('speed');
            $table->string('attribute_modifiers')->nullable();
            $table->string('skill_modifiers')->nullable();
            $table->string('bonus_feats')->nullable();
            $table->string('languages');
            $table->string('bonus_skill_per_level')->nullable();
		});

        DB::table('races')->insert(array(array(
            'name' => 'Dwarf',
            'description' => 'These short and stocky defenders of mountain fortresses are often seen as stern and humorless. Known for mining the earth’s treasures and crafting magnificent items from ore and gemstones, they have an unrivaled affinity for the bounties of the deep earth. Dwarves also have a tendency toward traditionalism and isolation that sometimes manifests as xenophobia.',
            'size' => 'M',
            'speed' => 20,
            'attribute_modifiers' => '[CON:+2,WIS:+2,CHA:-2]',
            'skill_modifiers' => '[Appraise:+2]',
            'bonus_feats' => '',
            'languages' => '[Common,Dwarven]',
            'bonus_skill_per_level' => '',
        ), array(
            'name' => 'Elf',
            'description' => 'Tall, noble, and often haughty, elves are long-lived and subtle masters of the wilderness. Elves excel in the arcane arts. Often they use their intrinsic link to nature to forge new spells and create wondrous items that, like their creators, seem nearly impervious to the ravages of time. A private and often introverted race, elves can give the impression they are indifferent to the plights of others.',
            'size' => 'M',
            'speed' => 30,
            'attribute_modifiers' => '[DEX:+2,INT:+2,CON:-2]',
            'skill_modifiers' => '[Perception:+2]',
            'bonus_feats' => '',
            'languages' => '[Common,Elven]',
            'bonus_skill_per_level' => '',
        ), array(
            'name' => 'Gnome',
            'description' => 'Expatriates of the strange land of fey, these small folk have a reputation for flighty and eccentric behavior. Many gnomes are whimsical artisans and tinkers, creating strange devices powered by magic, alchemy, and their quirky imagination. Gnomes have an insatiable need for new experiences that often gets them in trouble.',
            'size' => 'S',
            'speed' => 20,
            'attribute_modifiers' => '[CHA:+2,CON:+2,STR:-2]',
            'skill_modifiers' => '[Perception:+2, Craft:+2|Profession:+2]',
            'bonus_feats' => '',
            'languages' => '[Common,Gnome,Sylvan]',
            'bonus_skill_per_level' => '',
        ), array(
            'name' => 'Half Elf',
            'description' => 'Often caught between the worlds of their progenitor races, half-elves are a race of both grace and contradiction. Their dual heritage and natural gifts often create brilliant diplomats and peacemakers, but half-elves are often susceptible to an intense and even melancholic isolation, realizing that they are never truly part of elven or human society.',
            'size' => 'M',
            'speed' => 30,
            'attribute_modifiers' => '[ANY:+2]',
            'skill_modifiers' => '[Perception:+2]',
            'bonus_feats' => '[Skill Focus]',
            'languages' => '[Common,Elven]',
            'bonus_skill_per_level' => ''
        ), array(
            'name' => 'Half Orc',
            'description' => 'Often fierce and savage, sometimes noble and resolute, half-orcs can manifest the best and worst qualities of their parent races. Many half-orcs struggle to keep their more bestial natures in check in order to epitomize the most heroic values of humanity. Unfortunately, many outsiders see half-orcs as hopeless abominations devoid of civility, if not monsters unworthy of pity or parley.',
            'size' => 'M',
            'speed' => 30,
            'attribute_modifiers' => '[ANY:+2]',
            'skill_modifiers' => '[Intimidate:+2]',
            'bonus_feats' => '',
            'languages' => '[Common,Orc]',
            'bonus_skill_per_level' => '',
        ), array(
            'name' => 'Halfling',
            'description' => 'Members of this diminutive race find strength in family, community, and their own innate and seemingly inexhaustible luck. While their fierce curiosity is sometimes at odds with their intrinsic common sense, half lings are eternal optimists and cunning opportunists with an incredible knack for getting out the worst situations.',
            'size' => 'S',
            'speed' => 20,
            'attribute_modifiers' => '[DEX:+2,CHA:+2,STR:-2]',
            'skill_modifiers' => '[Acrobatics:+2,Climb:+2,Perception:+2]',
            'bonus_feats' => '',
            'languages' => '[Common,Halfling]',
            'bonus_skill_per_level' => '',
        ), array(
            'name' => 'Human',
            'description' => 'Ambitious, sometimes heroic, and always confident, humans have an ability to work together toward common goals that makes them a force to be reckoned with. Though short-lived compared to other races, their boundless energy and drive allow them to accomplish much in their brief lifetimes.',
            'size' => 'M',
            'speed' => 30,
            'attribute_modifiers' => '[ANY:+2]',
            'skill_modifiers' => '',
            'bonus_feats' => '[ANY]',
            'languages' => '[Common]',
            'bonus_skill_per_level' => 1,
        )));
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('races');
	}

}
