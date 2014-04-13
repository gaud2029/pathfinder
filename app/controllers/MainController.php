<?php

use Pathfinder\Forms\Main\AttributesForm;
use Pathfinder\Forms\Main\CharacterForm;
use Pathfinder\Forms\Main\PlayerForm;
use WinkForm\Form;

class MainController extends BaseController {

	public function index()
	{
        $data = array(
            'playerForm' => new PlayerForm(),
            'characterForm' => new CharacterForm(),
            'attributesForm' => new AttributesForm(),
            'submit' => Form::submit('submit_button', 'Save')->setWidth(100),
        );

		return View::make('main', $data);
	}

}
