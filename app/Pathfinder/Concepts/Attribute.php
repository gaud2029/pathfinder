<?php namespace Pathfinder\Concepts;

class Attribute extends \Eloquent
{
    /** @var array */
    protected static $keys = array('STR', 'DEX', 'CON', 'INT', 'WIS', 'CHA');

    /**
     * @return array
     */
    public static function listKeys()
    {
        return static::$keys;
    }
}
