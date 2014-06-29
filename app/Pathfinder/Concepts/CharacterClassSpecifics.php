<?php namespace Pathfinder\Concepts;

class CharacterClassSpecifics extends \Eloquent
{
    protected $table = 'character_classes';

    public function characterClass()
    {
        return $this->belongsTo('CharacterClass');
    }

    public function character()
    {
        return $this->belongsTo('Character');
    }
} 