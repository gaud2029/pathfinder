<?php namespace Pathfinder\Concepts;

class Attribute extends \Eloquent
{
    /** @var array */
    protected static $keys = array();

    /**
     * @return array
     */
    public static function listKeys()
    {
        if (empty(static::$keys))
            static::$keys = Attribute::all()->lists('key');

        return static::$keys;
    }
}
