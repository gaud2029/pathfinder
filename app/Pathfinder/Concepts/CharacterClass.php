<?php namespace Pathfinder\Concepts;

/**
 * Pathfinder\Concepts\CharacterClass
 *
 * @property integer $class_id
 * @property string $name
 * @property string $description
 * @property string $role
 * @property string $alignment_requirements
 * @property integer $hit_die
 * @property integer $skill_ranks_per_level
 */
class CharacterClass extends \Eloquent
{
    protected $table = 'classes';

    /** @var bool */
    public $favored = false;
}
