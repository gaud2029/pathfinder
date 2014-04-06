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
            $table->integer('slow_xp');
            $table->integer('medium_xp');
            $table->integer('fast_xp');
            $table->integer('feats')->nullable();
            $table->integer('ability_score')->nullable();
            $table->integer('wealth_pc');
            $table->integer('wealth_npc_basic');
            $table->integer('wealth_npc_heroic');
		});

        DB::table('character_advancement')->insert(array(array(
            'level' => 1,
            'slow_xp' => 0,
            'medium_xp' => 0,
            'fast_xp' => 0,
            'feats' => 1,
            'ability_score' => null,
            'wealth_pc' => 0,
            'wealth_npc_basic' => 260,
            'wealth_npc_heroic' => 390,
        ), array(
            'level' => 2,
            'slow_xp' => 3000,
            'medium_xp' => 2000,
            'fast_xp' => 1300,
            'feats' => null,
            'ability_score' => null,
            'wealth_pc' => 1000,
            'wealth_npc_basic' => 390,
            'wealth_npc_heroic' => 780,
        ), array(
            'level' => 3,
            'slow_xp' => 7500,
            'medium_xp' => 5000,
            'fast_xp' => 3300,
            'feats' => 2,
            'ability_score' => null,
            'wealth_pc' => 3000,
            'wealth_npc_basic' => 780,
            'wealth_npc_heroic' => 1650,
        ), array(
            'level' => 4,
            'slow_xp' => 14000,
            'medium_xp' => 9000,
            'fast_xp' => 6000,
            'feats' => null,
            'ability_score' => 1,
            'wealth_pc' => 6000,
            'wealth_npc_basic' => 1650,
            'wealth_npc_heroic' => 2400,
        ), array(
            'level' => 5,
            'slow_xp' => 23000,
            'medium_xp' => 15000,
            'fast_xp' => 10000,
            'feats' => 3,
            'ability_score' => null,
            'wealth_pc' => 10500,
            'wealth_npc_basic' => 2400,
            'wealth_npc_heroic' => 3450,
        ), array(
            'level' => 6,
            'slow_xp' => 35000,
            'medium_xp' => 23000,
            'fast_xp' => 15000,
            'feats' => null,
            'ability_score' => null,
            'wealth_pc' => 16000,
            'wealth_npc_basic' => 3450,
            'wealth_npc_heroic' => 4650,
        ), array(
            'level' => 7,
            'slow_xp' => 53000,
            'medium_xp' => 35000,
            'fast_xp' => 23000,
            'feats' => 4,
            'ability_score' => null,
            'wealth_pc' => 23500,
            'wealth_npc_basic' => 4650,
            'wealth_npc_heroic' => 6000,
        ), array(
            'level' => 8,
            'slow_xp' => 77000,
            'medium_xp' => 51000,
            'fast_xp' => 34000,
            'feats' => null,
            'ability_score' => 2,
            'wealth_pc' => 33000,
            'wealth_npc_basic' => 6000,
            'wealth_npc_heroic' => 7800,
        ), array(
            'level' => 9,
            'slow_xp' => 115000,
            'medium_xp' => 75000,
            'fast_xp' => 50000,
            'feats' => 5,
            'ability_score' => null,
            'wealth_pc' => 46000,
            'wealth_npc_basic' => 7800,
            'wealth_npc_heroic' => 10050,
        ), array(
            'level' => 10,
            'slow_xp' => 160000,
            'medium_xp' => 105000,
            'fast_xp' => 71000,
            'feats' => null,
            'ability_score' => null,
            'wealth_pc' => 62000,
            'wealth_npc_basic' => 10050,
            'wealth_npc_heroic' => 12750,
        ), array(
            'level' => 11,
            'slow_xp' => 235000,
            'medium_xp' => 155000,
            'fast_xp' => 105000,
            'feats' => 6,
            'ability_score' => null,
            'wealth_pc' => 82000,
            'wealth_npc_basic' => 12750,
            'wealth_npc_heroic' => 16350,
        ), array(
            'level' => 12,
            'slow_xp' => 330000,
            'medium_xp' => 220000,
            'fast_xp' => 145000,
            'feats' => null,
            'ability_score' => 3,
            'wealth_pc' => 108000,
            'wealth_npc_basic' => 16350,
            'wealth_npc_heroic' => 21000,
        ), array(
            'level' => 13,
            'slow_xp' => 475000,
            'medium_xp' => 315000,
            'fast_xp' => 210000,
            'feats' => 7,
            'ability_score' => null,
            'wealth_pc' => 140000,
            'wealth_npc_basic' => 21000,
            'wealth_npc_heroic' => 27000,
        ), array(
            'level' => 14,
            'slow_xp' => 665000,
            'medium_xp' => 445000,
            'fast_xp' => 295000,
            'feats' => null,
            'ability_score' => null,
            'wealth_pc' => 185000,
            'wealth_npc_basic' => 27000,
            'wealth_npc_heroic' => 34800,
        ), array(
            'level' => 15,
            'slow_xp' => 955000,
            'medium_xp' => 635000,
            'fast_xp' => 425000,
            'feats' => 8,
            'ability_score' => null,
            'wealth_pc' => 240000,
            'wealth_npc_basic' => 34800,
            'wealth_npc_heroic' => 45000,
        ), array(
            'level' => 16,
            'slow_xp' => 1350000,
            'medium_xp' => 890000,
            'fast_xp' => 600000,
            'feats' => null,
            'ability_score' => 4,
            'wealth_pc' => 315000,
            'wealth_npc_basic' => 45000,
            'wealth_npc_heroic' => 58500,
        ), array(
            'level' => 17,
            'slow_xp' => 1900000,
            'medium_xp' => 1300000,
            'fast_xp' => 850000,
            'feats' => 9,
            'ability_score' => null,
            'wealth_pc' => 410000,
            'wealth_npc_basic' => 58500,
            'wealth_npc_heroic' => 75000,
        ), array(
            'level' => 18,
            'slow_xp' => 2700000,
            'medium_xp' => 1800000,
            'fast_xp' => 1200000,
            'feats' => null,
            'ability_score' => null,
            'wealth_pc' => 530000,
            'wealth_npc_basic' => 75000,
            'wealth_npc_heroic' => 96000,
        ), array(
            'level' => 19,
            'slow_xp' => 3850000,
            'medium_xp' => 2550000,
            'fast_xp' => 1700000,
            'feats' => 10,
            'ability_score' => null,
            'wealth_pc' => 685000,
            'wealth_npc_basic' => 96000,
            'wealth_npc_heroic' => 123000,
        ), array(
            'level' => 20,
            'slow_xp' => 5350000,
            'medium_xp' => 3600000,
            'fast_xp' => 2400000,
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
