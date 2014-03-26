<?php

class MainController extends BaseController {

	public function index()
	{
        $playerForm = new PlayerForm();

		return View::make('main');
	}

}
