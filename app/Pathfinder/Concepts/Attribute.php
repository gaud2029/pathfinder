<?php namespace Pathfinder\Concepts;

/**
 * Pathfinder\Concepts\Attribute
 *
 * @property integer $attribute_id
 * @property string $key
 * @property string $name
 * @property string $description
 */
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
