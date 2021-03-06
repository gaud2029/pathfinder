<?php namespace Pathfinder\Forms\Main;

use Pathfinder\Abilities\Skill;
use Pathfinder\ViewHelpers\ModifierRenderer;
use WinkForm\Form;
use WinkForm\Input\Checkbox;
use WinkForm\Input\TextInput;

class SkillForm extends Form
{
    /** @var Skill */
    public $skill;
    /** @var Checkbox */
    public $untrained;
    /** @var TextInput */
    public $bonus;
    /** @var ModifierRenderer */
    public $modifier;
    /** @var Checkbox */
    public $classSkill;
    /** @var TextInput */
    public $ranks;
    /** @var TextInput */
    public $racialOrFeats;
    /** @var TextInput */
    public $misc;
    /** @var TextInput */
    public $acPenalty;

    /**
     * @param Skill $skill
     */
    public function __construct(Skill $skill)
    {
        $this->skill = $skill;
        $this->untrained = Form::checkbox('untrained', (bool) $skill->untrained)->setDisabled('disabled');
        $this->bonus = Form::text('bonus')->setDisabled('disabled')->addClass('small');
        $this->modifier = new ModifierRenderer($skill->modifier_attribute_key);
        $this->classSkill = Form::checkbox('classSkill')->setDisabled('disabled');
        $this->ranks = Form::text('ranks')->addClass('small');
        $this->racialOrFeats = Form::text('racialOrFeats')->addClass('small');
        $this->misc = Form::text('misc')->addClass('small');
        $this->acPenalty = Form::text('acPenalty')->setDisabled('disabled')->addClass('small');
    }

    /**
     * @throws \Exception
     */
    public function render()
    {
        throw new \Exception('A SkillForm is rendered in the SkillsForm');
    }
}
