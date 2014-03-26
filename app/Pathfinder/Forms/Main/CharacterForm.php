<?php namespace Pathfinder\Forms\Main;

use Pathfinder\Concepts\Race;
use WinkForm\Form;
use WinkForm\Input\Dropdown;
use WinkForm\Input\HiddenInput;
use WinkForm\Input\RadioInput;
use WinkForm\Input\TextInput;

class CharacterForm extends Form
{
    /** @var \WinkForm\Input\HiddenInput */
    public $alliance;
    /** @var \WinkForm\Input\TextInput */
    public $name;
    /** @var \WinkForm\Input\RadioInput */
    public $gender;
    /** @var \WinkForm\Input\Dropdown */
    public $race;
    /** @var \WinkForm\Input\Dropdown */
    public $size;
    /** @var \WinkForm\Input\TextInput */
    public $sizeModifier;
    /** @var \WinkForm\Input\TextInput */
    public $levelAdjustment;
    /** @var \WinkForm\Input\TextInput */
    public $effectiveLevel;
    /** @var \WinkForm\Input\TextInput */
    public $hp;
    /** @var \WinkForm\Input\TextInput */
    public $ranks;
    /** @var \WinkForm\Input\TextInput */
    public $intPerLevel;
    /** @var \WinkForm\Input\TextInput */
    public $conPerLevel;

    /** @var CharacterClassForm[] */
    protected $classForms = array();

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();

        $this->alliance = new HiddenInput('alliance');

        $this->name = new TextInput('name');

        $this->gender = new RadioInput('gender');
        $this->gender->appendOptions(array(
            'M' => 'Male',
            'F' => 'Female'
        ));

        $this->race = new Dropdown('race');
        $this->race->appendOptions(prepareArrayForDropdown(Race::all()));

        $this->size = Form::dropdown('size')->appendOptions(prepareArrayForDropdown(str_split('SML')));

        $this->sizeModifier = Form::text('sizeModifier');
        $this->levelAdjustment = Form::text('levelAdjustment');
        $this->effectiveLevel = Form::text('effectiveLevel');
        $this->hp = Form::text('hp');
        $this->ranks = Form::text('ranks');
        $this->intPerLevel = Form::text('intPerLevel');
        $this->conPerLevel = Form::text('conPerLevel');

        for ($i=1; $i<=5; $i++)
        {
            $this->classForms[$i] = new CharacterClassForm($i);
        }
    }


    /**
     * render the form
     * @return string
     */
    public function render()
    {

    }
}
