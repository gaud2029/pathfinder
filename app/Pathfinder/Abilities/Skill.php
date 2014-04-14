<?php namespace Pathfinder\Abilities;

use Illuminate\Support\Contracts\RenderableInterface;

class Skill extends \Eloquent implements RenderableInterface
{
    /** @var string */
    protected $primaryKey = 'skill_id';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function characterSkill()
    {
        return $this->belongsTo('character_skill', 'skill_id');
    }

    /**
     * Get the evaluated contents of the object.
     *
     * @return string
     */
    public function render()
    {
        $data = array('name' => $this->name, 'description' => $this->description);

        return \View::make('partials.skill', $data);
    }
}
