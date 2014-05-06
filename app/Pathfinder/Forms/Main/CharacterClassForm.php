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

        $this->favored = Form::radio('favored')->setValues(array($index => $index));

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

    /**
     * @param CharacterClass $class
     * @param boolean $favored
     * @param int $level
     */
    public function setSelected(CharacterClass $class, $favored, $level)
    {
        if ($favored)
            $this->favored->setSelected($this->getFavoredValue());

        $this->class->setSelected($class->name);
        $this->skillRanks->setSelected($class->skill_ranks_per_level);
        $this->hitDie->setSelected($class->hit_die);
        $this->level->setSelected($level);
    }

    /**
     * @return int $index
     */
    protected function getFavoredValue()
    {
        $values = $this->favored->getValues();
        return reset($values);
    }
}
