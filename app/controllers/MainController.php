<?php

use Pathfinder\Forms\Main\CharacterForm;
use Pathfinder\Forms\Main\PlayerForm;

class MainController extends BaseController {

	public function index()
	{
        $playerForm = new PlayerForm();
        $characterForm = new CharacterForm();
        $abilitiesForm = $playerForm; // TODO build abilitiesForm

		return View::make('main', compact('playerForm', 'abilitiesForm', 'characterForm'));
	}

}
