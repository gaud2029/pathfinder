<?php

use Pathfinder\Forms\Main\AttributesForm;
use Pathfinder\Forms\Main\CharacterForm;
use Pathfinder\Forms\Main\PlayerForm;
use Pathfinder\Forms\Main\SkillsForm;
use WinkForm\Form;

class MainController extends BaseController {

	public function index()
	{
        $data = array(
            'playerForm' => new PlayerForm(),
            'characterForm' => new CharacterForm(),
            'attributesForm' => new AttributesForm(),
            'skillsForm' => new SkillsForm(),
            'submit' => Form::submit('submit_button', 'Save')->addClass('btn-lg btn-primary'),
        );

		return View::make('main', $data);
	}

    public function handlePost()
    {
        $input = Input::all();
        dd($input);
    }

}
