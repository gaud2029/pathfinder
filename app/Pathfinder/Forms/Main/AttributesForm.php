<?php namespace Pathfinder\Forms\Main;

use Pathfinder\Concepts\Attribute;
use WinkForm\Form;

/**
 * Class AttributesForm
 * @package Pathfinder\Forms\Main
 *
 * AttributesForm contains the Attributes Form
 */
class AttributesForm extends Form
{
    /** @var array */
    protected $attributeForms = array();


    public function __construct()
    {
        foreach (Attribute::listKeys() as $key)
            $this->attributeForms[$key] = new AttributeForm($key);
    }

    /**
     * render the form
     * @return string
     */
    public function render()
    {
        return \View::make('form.attributes', array('attributeForms' => $this->attributeForms));
    }
}
