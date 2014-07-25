<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClasses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classes', function(Blueprint $table)
		{
			$table->increments('class_id');
            $table->string('name');
            $table->string('description');
            $table->text('role');
            $table->string('alignment_requirements')->nullable();
            $table->integer('hit_die');
            $table->integer('skill_ranks_per_level');
		});

        DB::table('classes')->insert(array(array(
            'name' => 'Barbarian',
            'description' => "The barbarian is a brutal berserker from beyond the edge of civilized lands.",
            'role' => "Barbarians excel in combat, possessing the martial prowess and fortitude to take on foes seemingly far superior to themselves. With rage granting them boldness and daring beyond that of most other warriors, barbarians charge furiously into battle and ruin all who would stand in their way.",
            'alignment_requirements' => 'Any nonlawful',
            'hit_die' => 12,
            'skill_ranks_per_level' => 4,
        ), array(
            'name' => 'Bard',
            'description' => "The bard uses skill and spell alike to bolster his allies, confound his enemies, and build upon his fame.",
            'role' => "Bards capably confuse and confound their foes while inspiring their allies to ever-greater daring. While accomplished with both weapons and magic, the true strength of bards lies outside melee, where they can support their companions and undermine their foes without fear of interruptions to their performances.",
            'alignment_requirements' => 'Any',
            'hit_die' => 8,
            'skill_ranks_per_level' => 6,
        ), array(
            'name' => 'Cleric',
            'description' => "A devout follower of a deity, the cleric can heal wounds, raise the dead, and call down the wrath of the gods.",
            'role' => "More than capable of upholding the honor of their deities in battle, clerics often prove stalwart and capable combatants. Their true strength lies in their capability to draw upon the power of their deities, whether to increase their own and their allies' prowess in battle, to vex their foes with divine magic, or to lend healing to companions in need.",
            'alignment_requirements' => "A cleric's alignment must be within one step of her deity's, along either the law/chaos axis or the good/evil axis",
            'hit_die' => 8,
            'skill_ranks_per_level' => 2,
        ), array(
            'name' => 'Druid',
            'description' => "The druid is a worshiper of all things natural—a spellcaster, a friend to animals, and a skilled shapechanger.",
            'role' => "While some druids might keep to the fringe of battle, allowing companions and summoned creatures to fight while they confound foes with the powers of nature, others transform into deadly beasts and savagely wade into combat. Druids worship personifications of elemental forces, natural powers, or nature itself. Typically this means devotion to a nature deity, though druids are just as likely to revere vague spirits, animalistic demigods, or even specific awe-inspiring natural wonders.",
            'alignment_requirements' => 'Any neutral',
            'hit_die' => 8,
            'skill_ranks_per_level' => 4,
        ), array(
            'name' => 'Fighter',
            'description' => "Brave and stalwart, the fighter is a master of all manner of arms and armor.",
            'role' => "Fighters excel at combat—defeating their enemies, controlling the flow of battle, and surviving such sorties themselves. While their specific weapons and methods grant them a wide variety of tactics, few can match fighters for sheer battle prowess.",
            'alignment_requirements' => 'Any',
            'hit_die' => 10,
            'skill_ranks_per_level' => 2,
        ), array(
            'name' => 'Monk',
            'description' => "A student of martial arts, the monk trains his body to be his greatest weapon and defense.",
            'role' => "Monks excel at overcoming even the most daunting perils, striking where it's least expected, and taking advantage of enemy vulnerabilities. Fleet of foot and skilled in combat, monks can navigate any battlefield with ease, aiding allies wherever they are needed most.",
            'alignment_requirements' => 'Any lawful',
            'hit_die' => 8,
            'skill_ranks_per_level' => 4,
        ), array(
            'name' => 'Paladin',
            'description' => "The paladin is the knight in shining armor, a devoted follower of law and good.",
            'role' => "Paladins serve as beacons for their allies within the chaos of battle. While deadly opponents of evil, they can also empower goodly souls to aid in their crusades. Their magic and martial skills also make them well suited to defending others and blessing the fallen with the strength to continue fighting.",
            'alignment_requirements' => 'Lawful Good',
            'hit_die' => 10,
            'skill_ranks_per_level' => 2,
        ), array(
            'name' => 'Ranger',
            'description' => "A tracker and hunter, the ranger is a creature of the wild and of tracking down his favored foes.",
            'role' => "Rangers are deft skirmishers, either in melee or at range, capable of skillfully dancing in and out of battle. Their abilities allow them to deal significant harm to specific types of foes, but their skills are valuable against all manner of enemies.",
            'alignment_requirements' => 'Any',
            'hit_die' => 10,
            'skill_ranks_per_level' => 6,
        ), array(
            'name' => 'Rogue',
            'description' => "The rogue is a thief and a scout, an opportunist capable of delivering brutal strikes against unwary foes.",
            'role' => "Rogues excel at moving about unseen and catching foes unaware, and tend to avoid head-to-head combat. Their varied skills and abilities allow them to be highly versatile, with great variations in expertise existing between different rogues. Most, however, excel in overcoming hindrances of all types, from unlocking doors and disarming traps to outwitting magical hazards and conning dull-witted opponents.",
            'alignment_requirements' => 'Any',
            'hit_die' => 8,
            'skill_ranks_per_level' => 8,
        ), array(
            'name' => 'Sorcerer',
            'description' => "The spellcasting sorcerer is born with an innate knack for magic and has strange, eldritch powers.",
            'role' => "Sorcerers excel at casting a selection of favored spells frequently, making them powerful battle mages. As they become familiar with a specific and ever-widening set of spells, sorcerers often discover new and versatile ways of making use of magics other spellcasters might overlook. Their bloodlines also grant them additional abilities, assuring that no two sorcerers are ever quite alike.",
            'alignment_requirements' => 'Any',
            'hit_die' => 6,
            'skill_ranks_per_level' => 2,
        ), array(
            'name' => 'Wizard',
            'description' => "The wizard masters magic through constant study that gives him incredible magical power.",
            'role' => "While universalist wizards might study to prepare themselves for any manner of danger, specialist wizards research schools of magic that make them exceptionally skilled within a specific focus. Yet no matter their specialty, all wizards are masters of the impossible and can aid their allies in overcoming any danger.",
            'alignment_requirements' => 'Any',
            'hit_die' => 6,
            'skill_ranks_per_level' => 2,
        )));
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
