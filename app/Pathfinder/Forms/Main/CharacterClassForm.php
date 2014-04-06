<?php namespace Pathfinder\Forms\Main;

use Pathfinder\Concepts\CharacterClass;
use WinkForm\Form;

class CharacterClassForm extends Form
{
    /** @var int */
    public $index;
    /** @var \WinkForm\Input\Checkbox */
    public $favored;
    /** @var \WinkForm\Input\Dropdown */
    public $class;
    /** @var \WinkForm\Input\TextInput */
    public $skillRanks;
    /** @var \WinkForm\Input\TextInput */
    public $hitDie;
    /** @var \WinkForm\Input\TextInput */
    public $level;

    /**
     * @param int $index
     */
    public function __construct($index)
    {
        $this->index = $index;

        $this->favored = Form::checkbox('favored');

        $classes = CharacterClass::all(array('class_id', 'name'))->lists('name', 'class_id');
        $this->class = Form::dropdown('class')->appendOptions($classes);

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
