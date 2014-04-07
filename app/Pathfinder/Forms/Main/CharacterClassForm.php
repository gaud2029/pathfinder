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

        $this->favored = Form::checkbox('favored'.$index);

        $classes = CharacterClass::all(array('class_id', 'name'))->lists('name', 'class_id');
        $this->class = Form::dropdown('class'.$index)->appendOptions($classes)->prependOption('', '');

        $this->skillRanks = Form::text('skillRanks'.$index)->setMaxLength(2)->addValidation('max:99|numeric')->addClass('small');

        $this->hitDie = Form::text('hitDie'.$index)->setMaxLength(2)->addValidation('numeric')->setLabel('d')->addClass('small');

        $this->level = Form::text('level'.$index)->addValidation('max:999|numeric')->addClass('small');
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
