<?php

class PublicPropertiesTester
{
    public $one = 1, $two = 2, $three = 3;
    protected $four = 4, $five = 5;
}

class HelpersTest extends TestCase
{
    public $one = 1, $two = 2, $three = 3;
    protected $four = 4, $five = 5;

    public function testPublicProperties()
    {
        $pp = new PublicPropertiesTester();
        $actual = getPublicProperties($pp);
        $expected = array('one' => 1, 'two' => 2, 'three' => 3);
        $this->assertEquals($actual, $expected);
    }

    public function testPublicPropertiesOfOwnClass()
    {
        $actual = getPublicProperties($this);
        $expected = array('one' => 1, 'two' => 2, 'three' => 3);
        $this->assertEquals($actual, $expected);
    }

    public function testArrayIsAssoc()
    {
        $array = array('foo' => 'bar');
        $this->assertTrue(array_is_assoc($array));

        $array = array('foo', 'bar');
        $this->assertFalse(array_is_assoc($array));
    }

    public function testPrepareArrayForDropdown()
    {
        $array = array('foo', 'bar');
        $actual = prepareArrayForDropdown($array);
        $expected = array('foo' => 'foo', 'bar' => 'bar');
        $this->assertEquals($expected, $actual);

        $array = array(0 => 'meh', 'foo' => 'bar');
        $actual = prepareArrayForDropdown($array);
        $this->assertEquals($array, $actual);
    }
}
