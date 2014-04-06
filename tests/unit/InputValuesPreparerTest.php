<?php

use Pathfinder\Forms\Helper\InputValuesPreparer;

class InputValuesPreparerTest extends TestCase
{
    /** @var InputValuesPreparer */
    protected $preparer;

    protected $assocArray = array('one' => 'foo', 'two' => 'bar');
    protected $tableArray = array(
        0 => array('key' => 1, 'value' => 2),
        1 => array('key' => 11, 'value' => 12),
    );
    protected $simpleArray = array('foo', 'bar');

    public function testCreation()
    {
        $preparer = new InputValuesPreparer($this->simpleArray);
        $this->assertInstanceOf('\\Pathfinder\\Forms\\Helper\\InputValuesPreparer', $preparer);
    }

    public function testAssocArray()
    {
        $preparer = new InputValuesPreparer($this->assocArray);
        $this->assertEquals($this->assocArray, $preparer->prepare());
    }

    public function testTableArray()
    {
        $preparer = new InputValuesPreparer($this->tableArray);
        $expected = array(1 => 2, 11 => 12);
        $this->assertEquals($expected, $preparer->prepare());
    }

    public function testSimpleArray()
    {
        $preparer = new InputValuesPreparer($this->simpleArray);
        $expected = array('foo' => 'foo', 'bar' => 'bar');
        $this->assertEquals($expected, $preparer->prepare());
    }
}
