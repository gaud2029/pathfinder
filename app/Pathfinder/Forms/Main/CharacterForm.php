<?php namespace Pathfinder\Forms\Main;

use Pathfinder\Concepts\Race;
use Pathfinder\ViewHelpers\ModifierRenderer;
use WinkForm\Form;

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

        $this->alliance = Form::hidden('alliance');

        $this->name = Form::text('name')->setLabel('Name');

        $this->gender = Form::radio('gender')->appendOptions(array('M' => 'Male', 'F' => 'Female'));

        $races = Race::all(array('race_id', 'name'))->lists('name', 'race_id');
        $this->race = Form::dropdown('race')->setLabel('Race')->appendOptions($races);

        $this->size = Form::dropdown('size', 'M')->setLabel('Size')->appendOptions(array('S' => 'Small', 'M' => 'Medium', 'L' => 'Large'))->setDisabled('disabled');

        $this->sizeModifier = Form::text('sizeModifier')->setLabel('Size Modifier')->addClass('small')->setDisabled('disabled');

        $this->levelAdjustment = Form::text('levelAdjustment')->setLabel('Level Adjustment');

        $this->effectiveLevel = Form::text('effectiveLevel')->setLabel('Effective level');

        $this->hp = Form::text('hp')->setLabel('HP');

        $this->ranks = Form::text('ranks')->setLabel('Ranks');

        $this->intPerLevel = new ModifierRenderer('int');

        $this->conPerLevel = new ModifierRenderer('con');

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
        $data = array(
            'form' => $this,
            'classSubForms' => $this->classForms,
            'intModifier' => $this->intPerLevel->render(),  // TODO fetch modifier value;
            'conModifier' => $this->conPerLevel->render(),
        );
        return \View::make('form.character', $data);
    }
}
