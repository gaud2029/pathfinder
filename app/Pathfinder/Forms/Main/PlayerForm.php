<?php namespace Pathfinder\Forms\Main;

use WinkForm\Form;

class PlayerForm extends Form
{
    /** @var \WinkForm\Input\TextInput */
    public $player;
    /** @var \WinkForm\Input\TextInput */
    public $campaign;
    /** @var \WinkForm\Input\TextInput */
    public $xp;


    public function __construct()
    {
        parent::__construct();

        $this->player = Form::text('player')->setRequired();
        $this->campaign = Form::text('campaign');
        $this->xp = Form::text('xp')->addValidation('numeric');
    }

    /**
     * render the form
     * @return string
     */
    public function render()
    {

    }
}
