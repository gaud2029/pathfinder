<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeadership extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leadership', function(Blueprint $table) {
			$table->string('leadership_score');
			$table->integer('cohort_level')->nullable();
			$table->integer('level_1st_followers')->nullable();
			$table->integer('level_2nd_followers')->nullable();
			$table->integer('level_3rd_followers')->nullable();
			$table->integer('level_4th_followers')->nullable();
			$table->integer('level_5th_followers')->nullable();
			$table->integer('level_6th_followers')->nullable();
		});

        DB::table('leadership')->insert(array(array(
            'leadership_score' => '<= 1',
            'cohort_level' => null,
            'level_1st_followers' => null,
            'level_2nd_followers' => null,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '2',
            'cohort_level' => 1,
            'level_1st_followers' => null,
            'level_2nd_followers' => null,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '3',
            'cohort_level' => 2,
            'level_1st_followers' => null,
            'level_2nd_followers' => null,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '4',
            'cohort_level' => 3,
            'level_1st_followers' => null,
            'level_2nd_followers' => null,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '5',
            'cohort_level' => 3,
            'level_1st_followers' => null,
            'level_2nd_followers' => null,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '6',
            'cohort_level' => 4,
            'level_1st_followers' => null,
            'level_2nd_followers' => null,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '7',
            'cohort_level' => 5,
            'level_1st_followers' => null,
            'level_2nd_followers' => null,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '8',
            'cohort_level' => 5,
            'level_1st_followers' => null,
            'level_2nd_followers' => null,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '9',
            'cohort_level' => 6,
            'level_1st_followers' => null,
            'level_2nd_followers' => null,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '10',
            'cohort_level' => 7,
            'level_1st_followers' => 5,
            'level_2nd_followers' => null,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '11',
            'cohort_level' => 7,
            'level_1st_followers' => 6,
            'level_2nd_followers' => null,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '12',
            'cohort_level' => 8,
            'level_1st_followers' => 8,
            'level_2nd_followers' => null,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '13',
            'cohort_level' => 9,
            'level_1st_followers' => 10,
            'level_2nd_followers' => 1,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '14',
            'cohort_level' => 10,
            'level_1st_followers' => 15,
            'level_2nd_followers' => 1,
            'level_3rd_followers' => null,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '15',
            'cohort_level' => 10,
            'level_1st_followers' => 20,
            'level_2nd_followers' => 2,
            'level_3rd_followers' => 1,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '16',
            'cohort_level' => 11,
            'level_1st_followers' => 25,
            'level_2nd_followers' => 2,
            'level_3rd_followers' => 1,
            'level_4th_followers' => null,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '17',
            'cohort_level' => 12,
            'level_1st_followers' => 30,
            'level_2nd_followers' => 3,
            'level_3rd_followers' => 1,
            'level_4th_followers' => 1,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '18',
            'cohort_level' => 12,
            'level_1st_followers' => 35,
            'level_2nd_followers' => 3,
            'level_3rd_followers' => 1,
            'level_4th_followers' => 1,
            'level_5th_followers' => null,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '19',
            'cohort_level' => 13,
            'level_1st_followers' => 40,
            'level_2nd_followers' => 4,
            'level_3rd_followers' => 2,
            'level_4th_followers' => 1,
            'level_5th_followers' => 1,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '20',
            'cohort_level' => 14,
            'level_1st_followers' => 50,
            'level_2nd_followers' => 5,
            'level_3rd_followers' => 3,
            'level_4th_followers' => 2,
            'level_5th_followers' => 1,
            'level_6th_followers' => null,
        ), array(
            'leadership_score' => '21',
            'cohort_level' => 15,
            'level_1st_followers' => 60,
            'level_2nd_followers' => 6,
            'level_3rd_followers' => 3,
            'level_4th_followers' => 2,
            'level_5th_followers' => 1,
            'level_6th_followers' => 1,
        ), array(
            'leadership_score' => '22',
            'cohort_level' => 15,
            'level_1st_followers' => 75,
            'level_2nd_followers' => 7,
            'level_3rd_followers' => 4,
            'level_4th_followers' => 2,
            'level_5th_followers' => 2,
            'level_6th_followers' => 1,
        ), array(
            'leadership_score' => '23',
            'cohort_level' => 16,
            'level_1st_followers' => 90,
            'level_2nd_followers' => 9,
            'level_3rd_followers' => 5,
            'level_4th_followers' => 3,
            'level_5th_followers' => 2,
            'level_6th_followers' => 1,
        ), array(
            'leadership_score' => '24',
            'cohort_level' => 17,
            'level_1st_followers' => 110,
            'level_2nd_followers' => 11,
            'level_3rd_followers' => 6,
            'level_4th_followers' => 3,
            'level_5th_followers' => 2,
            'level_6th_followers' => 1,
        ), array(
            'leadership_score' => '>= 25',
            'cohort_level' => 17,
            'level_1st_followers' => 135,
            'level_2nd_followers' => 13,
            'level_3rd_followers' => 7,
            'level_4th_followers' => 4,
            'level_5th_followers' => 2,
            'level_6th_followers' => 2,
        )));
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('leadership');
	}

}
