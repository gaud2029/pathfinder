<?php

use Pathfinder\Abilities\Skill;
use Pathfinder\Forms\Main\SkillForm;
use Pathfinder\Forms\Main\SkillsForm;

class SkillsFormTest extends TestCase
{
    /** @var SkillForm */
    protected $skillForm;
    /** @var SkillsForm */
    protected $skillsForm;

    public function setUp()
    {
        parent::setUp();
        $this->skillForm = new SkillForm(Skill::first());
        $this->skillsForm = new SkillsForm();
    }

    public function tearDown()
    {
        parent::tearDown();
        unset($this->skillForm);
        unset($this->skillsForm);
    }

    public function testSkillsFormCreation()
    {
        $this->assertInstanceOf('\\Pathfinder\\Forms\\Main\\SkillsForm', $this->skillsForm);
    }

    public function testSkillFormCreation()
    {
        $this->assertInstanceOf('\\Pathfinder\\Forms\\Main\\SkillForm', $this->skillForm);
    }
}
