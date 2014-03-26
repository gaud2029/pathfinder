<?php namespace Pathfinder\Forms\Main;

use Pathfinder\Concepts\CharacterClass;
use WinkForm\Form;

class CharacterClassForm extends Form
{
    /** @var int */
    public $index;
    /** @var \WinkForm\Input\Checkbox */
    public $favored;

    public $class;

    public $skillRanks;

    public $hitDie;

    public $level;

    /**
     * @param $index
     */
    public function __construct($index)
    {
        $this->index = $index;

        $this->favored = Form::checkbox('favored');

        $this->class = Form::dropdown('class')->appendOptions(prepareArrayForDropdown(CharacterClass::all(array())));

        $this->skillRanks = Form::text('skillRanks')->addValidation('max:999|numeric');

        $this->hitDie = Form::text('hitDie')->setMaxLength(2)->addValidation('numeric')->setLabel('d');

        $this->level = Form::text('level')->addValidation('max:999|numeric');
    }

    /**
     * render the form
     * @throws \Exception
     * @return string
     */
    public function render()
    {
        throw new \Exception('Rendering per Input is done in the view');
    }
}
