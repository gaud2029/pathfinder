<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImprovedFamiliar extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('improved_familiar', function(Blueprint $table) {
			$table->string('familiar');
			$table->string('alignment');
			$table->string('caster_level');
			$table->string('notes')->nullable();
		});

        DB::table('improved_familiar')->insert(array(array(
            'familiar' => 'Celestial hawk',
            'alignment' => 'Neutral good',
            'caster_level' => '3rd',
            'notes' => 'Or other celestial animal from the standard familiar list.',
        ), array(
            'familiar' => 'Dire rat',
            'alignment' => 'Neutral',
            'caster_level' => '3rd',
            'notes' => '',
        ), array(
            'familiar' => 'Fiendish viper',
            'alignment' => 'Neutral evil',
            'caster_level' => '3rd',
            'notes' => 'Or other fiendish animal from the standard familiar list.',
        ), array(
            'familiar' => 'Elemental, Small (any type)',
            'alignment' => 'Neutral',
            'caster_level' => '5th',
            'notes' => '',
        ), array(
            'familiar' => 'Stirge',
            'alignment' => 'Neutral',
            'caster_level' => '5th',
            'notes' => '',
        ), array(
            'familiar' => 'Homunculus',
            'alignment' => 'Any',
            'caster_level' => '7th',
            'notes' => 'The master must first create the homunculus.',
        ), array(
            'familiar' => 'Imp',
            'alignment' => 'Lawful evil',
            'caster_level' => '7th',
            'notes' => '',
        ), array(
            'familiar' => 'Mephit (any type)',
            'alignment' => 'Neutral',
            'caster_level' => '7th',
            'notes' => '',
        ), array(
            'familiar' => 'Pseudodragon',
            'alignment' => 'Neutral good',
            'caster_level' => '7th',
            'notes' => '',
        ), array(
            'familiar' => 'Quasit',
            'alignment' => 'Chaotic evil',
            'caster_level' => '7th',
            'notes' => '',
        )));
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('improved_familiar');
	}

}
