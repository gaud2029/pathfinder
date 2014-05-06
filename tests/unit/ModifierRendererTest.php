<?php
use Pathfinder\ViewHelpers\ModifierRenderer;

class ModifierRendererTest extends TestCase
{
    /** @var Pathfinder\ViewHelpers\ModifierRenderer */
    protected $renderer;

    public function setUp()
    {
        $this->renderer = new ModifierRenderer('str');
    }

    public function tearDown()
    {
        unset($this->renderer);
    }

    public function testCreation()
    {
        $this->assertInstanceOf('\\Pathfinder\\ViewHelpers\\ModifierRenderer', $this->renderer);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidType()
    {
        $r = new ModifierRenderer('foo');
        $this->fail('Invalid type should throw Exception');
    }

    public function testRender()
    {
        $actual = (string) $this->renderer->render();
        $this->assertContains('str-color', $actual);
    }

    public function testValue()
    {
        $this->renderer->setValue(3);
        $this->assertContains('<span class="modifier-value">3</span>', $this->renderer->render()->__toString());
    }
}
