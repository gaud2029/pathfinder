<?php namespace Pathfinder\Characters;

/**
 * Class Character
 *
 * This class contains the Character
 */
class Character extends \Eloquent
{
    public function characterClassSpecifics()
    {
        return $this->hasMany('CharacterClassSpecifics');
    }

    public function characterClass()
    {
        return $this->hasMany('CharacterClass');
    }
} 