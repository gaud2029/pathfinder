<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterAdvancement extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('character_advancement', function(Blueprint $table)
		{
			$table->increments('level');
            $table->integer('xp_slow');
            $table->integer('xp_medium');
            $table->integer('xp_fast');
            $table->integer('feats')->nullable();
            $table->integer('ability_score')->nullable();
            $table->integer('wealth_pc');
            $table->integer('wealth_npc_basic');
            $table->integer('wealth_npc_heroic');
		});

        DB::table('character_advancement')->insert(array(array(
            'level' => 1,
            'xp_slow' => 0,
            'xp_medium' => 0,
            'xp_fast' => 0,
            'feats' => 1,
            'ability_score' => null,
            'wealth_pc' => 0,
            'wealth_npc_basic' => 260,
            'wealth_npc_heroic' => 390,
        ), array(
            'level' => 2,
            'xp_slow' => 3000,
            'xp_medium' => 2000,
            'xp_fast' => 1300,
            'feats' => null,
            'ability_score' => null,
            'wealth_pc' => 1000,
            'wealth_npc_basic' => 390,
            'wealth_npc_heroic' => 780,
        ), array(
            'level' => 3,
            'xp_slow' => 7500,
            'xp_medium' => 5000,
            'xp_fast' => 3300,
            'feats' => 2,
            'ability_score' => null,
            'wealth_pc' => 3000,
            'wealth_npc_basic' => 780,
            'wealth_npc_heroic' => 1650,
        ), array(
            'level' => 4,
            'xp_slow' => 14000,
            'xp_medium' => 9000,
            'xp_fast' => 6000,
            'feats' => null,
            'ability_score' => 1,
            'wealth_pc' => 6000,
            'wealth_npc_basic' => 1650,
            'wealth_npc_heroic' => 2400,
        ), array(
            'level' => 5,
            'xp_slow' => 23000,
            'xp_medium' => 15000,
            'xp_fast' => 10000,
            'feats' => 3,
            'ability_score' => null,
            'wealth_pc' => 10500,
            'wealth_npc_basic' => 2400,
            'wealth_npc_heroic' => 3450,
        ), array(
            'level' => 6,
            'xp_slow' => 35000,
            'xp_medium' => 23000,
            'xp_fast' => 15000,
            'feats' => null,
            'ability_score' => null,
            'wealth_pc' => 16000,
            'wealth_npc_basic' => 3450,
            'wealth_npc_heroic' => 4650,
        ), array(
            'level' => 7,
            'xp_slow' => 53000,
            'xp_medium' => 35000,
            'xp_fast' => 23000,
            'feats' => 4,
            'ability_score' => null,
            'wealth_pc' => 23500,
            'wealth_npc_basic' => 4650,
            'wealth_npc_heroic' => 6000,
        ), array(
            'level' => 8,
            'xp_slow' => 77000,
            'xp_medium' => 51000,
            'xp_fast' => 34000,
            'feats' => null,
            'ability_score' => 2,
            'wealth_pc' => 33000,
            'wealth_npc_basic' => 6000,
            'wealth_npc_heroic' => 7800,
        ), array(
            'level' => 9,
            'xp_slow' => 115000,
            'xp_medium' => 75000,
            'xp_fast' => 50000,
            'feats' => 5,
            'ability_score' => null,
            'wealth_pc' => 46000,
            'wealth_npc_basic' => 7800,
            'wealth_npc_heroic' => 10050,
        ), array(
            'level' => 10,
            'xp_slow' => 160000,
            'xp_medium' => 105000,
            'xp_fast' => 71000,
            'feats' => null,
            'ability_score' => null,
            'wealth_pc' => 62000,
            'wealth_npc_basic' => 10050,
            'wealth_npc_heroic' => 12750,
        ), array(
            'level' => 11,
            'xp_slow' => 235000,
            'xp_medium' => 155000,
            'xp_fast' => 105000,
            'feats' => 6,
            'ability_score' => null,
            'wealth_pc' => 82000,
            'wealth_npc_basic' => 12750,
            'wealth_npc_heroic' => 16350,
        ), array(
            'level' => 12,
            'xp_slow' => 330000,
            'xp_medium' => 220000,
            'xp_fast' => 145000,
            'feats' => null,
            'ability_score' => 3,
            'wealth_pc' => 108000,
            'wealth_npc_basic' => 16350,
            'wealth_npc_heroic' => 21000,
        ), array(
            'level' => 13,
            'xp_slow' => 475000,
            'xp_medium' => 315000,
            'xp_fast' => 210000,
            'feats' => 7,
            'ability_score' => null,
            'wealth_pc' => 140000,
            'wealth_npc_basic' => 21000,
            'wealth_npc_heroic' => 27000,
        ), array(
            'level' => 14,
            'xp_slow' => 665000,
            'xp_medium' => 445000,
            'xp_fast' => 295000,
            'feats' => null,
            'ability_score' => null,
            'wealth_pc' => 185000,
            'wealth_npc_basic' => 27000,
            'wealth_npc_heroic' => 34800,
        ), array(
            'level' => 15,
            'xp_slow' => 955000,
            'xp_medium' => 635000,
            'xp_fast' => 425000,
            'feats' => 8,
            'ability_score' => null,
            'wealth_pc' => 240000,
            'wealth_npc_basic' => 34800,
            'wealth_npc_heroic' => 45000,
        ), array(
            'level' => 16,
            'xp_slow' => 1350000,
            'xp_medium' => 890000,
            'xp_fast' => 600000,
            'feats' => null,
            'ability_score' => 4,
            'wealth_pc' => 315000,
            'wealth_npc_basic' => 45000,
            'wealth_npc_heroic' => 58500,
        ), array(
            'level' => 17,
            'xp_slow' => 1900000,
            'xp_medium' => 1300000,
            'xp_fast' => 850000,
            'feats' => 9,
            'ability_score' => null,
            'wealth_pc' => 410000,
            'wealth_npc_basic' => 58500,
            'wealth_npc_heroic' => 75000,
        ), array(
            'level' => 18,
            'xp_slow' => 2700000,
            'xp_medium' => 1800000,
            'xp_fast' => 1200000,
            'feats' => null,
            'ability_score' => null,
            'wealth_pc' => 530000,
            'wealth_npc_basic' => 75000,
            'wealth_npc_heroic' => 96000,
        ), array(
            'level' => 19,
            'xp_slow' => 3850000,
            'xp_medium' => 2550000,
            'xp_fast' => 1700000,
            'feats' => 10,
            'ability_score' => null,
            'wealth_pc' => 685000,
            'wealth_npc_basic' => 96000,
            'wealth_npc_heroic' => 123000,
        ), array(
            'level' => 20,
            'xp_slow' => 5350000,
            'xp_medium' => 3600000,
            'xp_fast' => 2400000,
            'feats' => null,
            'ability_score' => 5,
            'wealth_pc' => 880000,
            'wealth_npc_basic' => 123000,
            'wealth_npc_heroic' => 159000,
        )));
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('character_advancement');
	}

}
