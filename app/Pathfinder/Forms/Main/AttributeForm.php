<?php namespace Pathfinder\Forms\Main;

use Pathfinder\ViewHelpers\ModifierRenderer;
use WinkForm\Form;

/**
 * Class AttributeForm
 *
 * AttributeForm contains a row in the abilities table on the main page
 */
class AttributeForm extends Form
{
    /** @var \Pathfinder\ViewHelpers\ModifierRenderer */
    public $key;
    /** @var \WinkForm\Input\TextInput */
    public $score;
    /** @var \WinkForm\Input\TextInput */
    public $bonus;
    /** @var \WinkForm\Input\TextInput */
    public $modifier;


    /**
     * @param string $key
     */
    public function __construct($key)
    {
        parent::__construct();

        $this->key = new ModifierRenderer($key);
        $this->score = Form::text($key.'AttributeScore')->addClass('small');
        $this->bonus = Form::text($key.'AttributeBonus')->addClass('small');
        $this->modifier = Form::text($key.'AttributeModifier')->addClass('small')->setDisabled('readonly');
    }

    public function render()
    {
        throw new \Exception('An AttributeForm is rendered in the AttributesForm');
    }
}
