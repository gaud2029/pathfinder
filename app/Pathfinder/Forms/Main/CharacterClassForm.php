<?php namespace Pathfinder\Forms\Main;

use WinkForm\Form;

class CharacterClassForm extends Form
{
    public $favoured;

    public $class;

    public $skillRanks;

    public $hitDie;

    public $level;


    public function __construct()
    {

    }

    /**
     * render the form
     * @return string
     */
    public function render()
    {
        // TODO: Implement render() method.
    }
}
