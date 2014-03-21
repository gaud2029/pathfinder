<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Pathfinder\Abilities\Skill;

class CreateSkills extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skills', function(Blueprint $table)
		{
			$table->increments('skill_id')->primary();
            $table->string('name');
            $table->text('description');
            $table->string('modifier_attribute_key', 3)->references('key')->on('attributes');
            $table->boolean('ac_penalty');
            $table->boolean('untrained');
		});

        Skill::create(array(
            'name' => 'Acrobatics',
            'description' => 'You can keep your balance while traversing narrow or treacherous surfaces. You can also dive, flip, jump, and roll, avoiding attacks and confusing your opponents.',
            'modifier_attribute_key' => 'DEX',
            'ac_penalty' => true,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Appraise',
            'description' => 'You can evaluate the monetary value of an object.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Bluff',
            'description' => 'You know how to tell a lie.',
            'modifier_attribute_key' => 'CHA',
            'ac_penalty' => false,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Climb',
            'description' => 'You are skilled at scaling vertical surfaces, from smooth city walls to rocky cliffs.',
            'modifier_attribute_key' => 'STR',
            'ac_penalty' => true,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Craft',
            'description' => 'You are skilled in the creation of a specific group of items, such as armor or weapons. Like Knowledge, Perform, and Profession, Craft is actually a number of separate skills. You could have several Craft skills, each with its own ranks. The most common Craft skills are alchemy, armor, baskets, books, bows, calligraphy, carpentry, cloth, clothing, glass, jewelry, leather, locks, paintings, pottery, sculptures, ships, shoes, stonemasonry, traps, and weapons. A Craft skill is specifically focused on creating something. If nothing is created by the endeavor, it probably falls under the heading of a Profession skill.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Diplomacy',
            'description' => 'You can use this skill to persuade others to agree with your arguments, to resolve differences, and to gather valuable information or rumors from people. This skill is also used to negotiate conflicts by using the proper etiquette and manners suitable to the problem.',
            'modifier_attribute_key' => 'CHA',
            'ac_penalty' => false,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Disable Device',
            'description' => 'You are skilled at disarming traps and opening locks. In addition, this skill lets you sabotage simple mechanical devices, such as catapults, wagon wheels, and doors.',
            'modifier_attribute_key' => 'DEX',
            'ac_penalty' => true,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Escape Artist',
            'description' => 'Your training allows you to slip bonds and escape from grapples.',
            'modifier_attribute_key' => 'DEX',
            'ac_penalty' => true,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Fly',
            'description' => 'You are skilled at flying, either through the use of wings or magic, and you can perform daring or complex maneuvers while airborne. Note that this skill does not give you the ability to fly.',
            'modifier_attribute_key' => 'DEX',
            'ac_penalty' => true,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Handle Animal',
            'description' => 'You are trained at working with animals, and can teach them tricks, get them to follow your simple commands, or even domesticate them.',
            'modifier_attribute_key' => 'CHA',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Heal',
            'description' => 'You are skilled at tending to the ailments of others.',
            'modifier_attribute_key' => 'CHA',
            'ac_penalty' => false,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Intimidate',
            'description' => 'You can use this skill to frighten your opponents or to get them to act in a way that benefits you. This skill includes verbal threats and displays of prowess.',
            'modifier_attribute_key' => 'CHA',
            'ac_penalty' => false,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Knowledge (Arcana)',
            'description' => 'You are educated in the field of study Arcana (ancient mysteries, magic traditions, arcane symbols, constructs, dragons, magical beasts) and can answer both simple and complex questions.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Knowledge (Dungeoneering)',
            'description' => 'You are educated in the field of study Dungeoneering (aberrations, caverns, oozes, spelunking) and can answer both simple and complex questions.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Knowledge (Engineering)',
            'description' => 'You are educated in the field of study Engineering (buildings, aqueducts, bridges, fortifications) and can answer both simple and complex questions.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Knowledge (Geography)',
            'description' => 'You are educated in the field of study Geography (lands, terrain, climate, people) and can answer both simple and complex questions.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Knowledge (History)',
            'description' => 'You are educated in the field of study Arcana (ancient mysteries, magic traditions, arcane symbols, constructs, dragons, magical beasts) and can answer both simple and complex questions.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Knowledge (Arcana)',
            'description' => 'You are educated in the field of study History (wars, colonies, migrations, founding of cities) and can answer both simple and complex questions.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Knowledge (Local)',
            'description' => 'You are educated in the field of study Local (legends, personalities, inhabitants, laws, customs, traditions, humanoids) and can answer both simple and complex questions.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Knowledge (Nature)',
            'description' => 'You are educated in the field of study Nature (animals, fey, monstrous humanoids, plants, seasons and cycles, weather, vermin) and can answer both simple and complex questions.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Knowledge (Nobility)',
            'description' => 'You are educated in the field of study Nobility (lineages, heraldry, personalities, royalty) and can answer both simple and complex questions.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Knowledge (Planes)',
            'description' => 'You are educated in the field of study Planes (the Inner Planes, the Outer Planes, the Astral Plane, the Ethereal Plane, outsiders, planar magic) and can answer both simple and complex questions.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Knowledge (Religion)',
            'description' => 'You are educated in the field of study Religion (gods and goddesses, mythic history, ecclesiastic tradition, holy symbols, undead) and can answer both simple and complex questions.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Linguistics',
            'description' => 'You are skilled at working with language, in both its spoken and written forms. You can speak multiple languages, and can decipher nearly any tongue given enough time. Your skill in writing allows you to create and detect forgeries as well.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Perception',
            'description' => 'Your senses allow you to notice fine details and alert you to danger. Perception covers all five senses, including sight, hearing, touch, taste, and smell.',
            'modifier_attribute_key' => 'WIS',
            'ac_penalty' => false,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Perform',
            'description' => 'You are skilled at one form of entertainment, from singing to acting to playing an instrument. Like Craft, Knowledge, and Profession, Perform is actually a number of separate skills. You could have several Perform skills, each with its own ranks.
Each of the nine categories of the Perform skill includes a variety of methods, instruments, or techniques, a small sample of which is provided for each category below:
Act (comedy, drama, pantomime),
Comedy (buffoonery, limericks, joke-telling),
Dance (ballet, waltz, jig),
Keyboard instruments (harpsichord, piano, pipe organ),
Oratory (epic, ode, storytelling),
Percussion instruments (bells, chimes, drums, gong),
String instruments (fiddle, harp, lute, mandolin),
Wind instruments (flute, pan pipes, recorder, trumpet),
Sing (ballad, chant, melody)',
            'modifier_attribute_key' => 'CHA',
            'ac_penalty' => false,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Profession',
            'description' => 'You are skilled at a specific job. Like Craft, Knowledge, and Perform, Profession is actually a number of separate skills. You could have several Profession skills, each with its own ranks. While a Craft skill represents ability in creating an item, a Profession skill represents an aptitude in a vocation requiring a broader range of less specific knowledge. The most common Profession skills are architect, baker, barrister, brewer, butcher, clerk, cook, courtesan, driver, engineer, farmer, fisherman, gambler, gardener, herbalist, innkeeper, librarian, merchant, midwife, miller, miner, porter, sailor, scribe, shepherd, stable master, soldier, tanner, trapper, and woodcutter.',
            'modifier_attribute_key' => 'WIS',
            'ac_penalty' => false,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Ride',
            'description' => 'You are skilled at riding mounts, usually a horse, but possibly something more exotic, like a griffon or pegasus. If you attempt to ride a creature that is ill suited as a mount, you take a –5 penalty on your Ride checks.',
            'modifier_attribute_key' => 'DEX',
            'ac_penalty' => true,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Sense Motive',
            'description' => 'You are skilled at detecting falsehoods and true intentions.',
            'modifier_attribute_key' => 'WIS',
            'ac_penalty' => false,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Sleight Of Hand',
            'description' => 'Your training allows you to pick pockets, draw hidden weapons, and take a variety of actions without being noticed.',
            'modifier_attribute_key' => 'DEX',
            'ac_penalty' => true,
            'untrained' => false,
        ));

        Skill::create(array(
            'name' => 'Spellcraft',
            'description' => 'You are skilled at the art of casting spells, identifying magic items, crafting magic items, and identifying spells as they are being cast.',
            'modifier_attribute_key' => 'INT',
            'ac_penalty' => false,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Stealth',
            'description' => 'You are skilled at avoiding detection, allowing you to slip past foes or strike from an unseen position. This skill covers hiding and moving silently.',
            'modifier_attribute_key' => 'DEX',
            'ac_penalty' => true,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Survival',
            'description' => 'You are skilled at surviving in the wild and at navigating in the wilderness. You also excel at following trails and tracks left by others.',
            'modifier_attribute_key' => 'WIS',
            'ac_penalty' => false,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Swim',
            'description' => 'You know how to swim and can do so even in stormy water.',
            'modifier_attribute_key' => 'STR',
            'ac_penalty' => true,
            'untrained' => true,
        ));

        Skill::create(array(
            'name' => 'Use Magic Device',
            'description' => 'You are skilled at activating magic items, even if you are not otherwise trained in their use.',
            'modifier_attribute_key' => 'CHA',
            'ac_penalty' => false,
            'untrained' => false,
        ));
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('skills');
	}

}
