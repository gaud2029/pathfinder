<?php namespace Pathfinder\Characters;

class CharacterSkill extends \Eloquent
{
    public function skill()
    {
        return $this->hasOne('skills', 'skill_id');
    }

    public function character()
    {
        return $this->belongsTo('characters', 'character_id');
    }
}
