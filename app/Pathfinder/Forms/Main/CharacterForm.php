<?php namespace Pathfinder\Forms\Main;

use WinkForm\Form;
use WinkForm\Input\Dropdown;
use WinkForm\Input\RadioInput;
use WinkForm\Input\TextInput;

class CharacterForm extends Form
{
    /** @var TextInput */
    public $name;
    /** @var \WinkForm\Input\RadioInput */
    public $gender;
    /** @var \WinkForm\Input\Dropdown */
    public $race;

    public $size;

    public $sizeModifier;

    public $levelAdjustment;

    public $effectiveLevel;

    // these are a bit unclear
    public $hp;

    public $rks;

    public $intPerLevel;

    public $conPerLevel;

    /** @var CharacterClassForm[] */
    protected $classForms = array();


    public function __construct()
    {
        parent::__construct();

        $this->name = new TextInput('name');

        $this->gender = new RadioInput('gender');
        $this->gender->appendOptions(array(
            'm' => 'male',
            'f' => 'female'
        ));

        $this->race = new Dropdown('race');
        $this->race->appendOptions(\Race::all());
    }


    /**
     * render the form
     * @return string
     */
    public function render()
    {

    }
}
