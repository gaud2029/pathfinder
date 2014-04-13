<?php namespace Pathfinder\Forms\Main;

use Pathfinder\Abilities\Skill;
use WinkForm\Form;

class SkillsForm extends Form
{
    /** @var SkillForm[] */
    protected $skillForms = array();


    public function __construct()
    {
        foreach (Skill::all() as $skill)
            $this->skillForms[$skill['skill_id']] = new SkillForm($skill);
    }

    public function render()
    {
        return \View::make('form.skills', array('skillForms' => $this->skillForms));
    }
}
