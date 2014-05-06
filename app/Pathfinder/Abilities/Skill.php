<?php namespace Pathfinder\Abilities;

use Illuminate\Support\Contracts\RenderableInterface;

/**
 * Pathfinder\Abilities\Skill
 *
 * @property integer $skill_id
 * @property string $name
 * @property string $description
 * @property string $modifier_attribute_key
 * @property boolean $ac_penalty
 * @property boolean $untrained
 * @property-read \character_skill $characterSkill
 */
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
