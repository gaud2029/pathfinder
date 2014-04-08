<?php

use Pathfinder\Forms\Main\AttributesForm;
use Pathfinder\Forms\Main\CharacterForm;
use Pathfinder\Forms\Main\PlayerForm;

class MainController extends BaseController {

	public function index()
	{
        $playerForm = new PlayerForm();
        $characterForm = new CharacterForm();
        $attributesForm = new AttributesForm();

		return View::make('main', compact('playerForm', 'attributesForm', 'characterForm'));
	}

}
