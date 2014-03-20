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
}
