<?php namespace Pathfinder\ViewHelpers;

use Illuminate\Support\Contracts\RenderableInterface;
use Pathfinder\Concepts\Attribute;

/**
 * Class ModifierRenderer
 *
 * Modifier is responsible for rendering the attribute modifiers
 */
class ModifierRenderer implements RenderableInterface
{
    /** @var string */
    protected $type;
    /** @var int */
    protected $value;
    /** @var array */
    protected $allTypes;

    /**
     * @param string $type
     * @param int $value
     */
    public function __construct($type, $value)
    {
        $this->allTypes = Attribute::getAllKeys();
        $this->setType($type);
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function render()
    {
        return \View::make('partials.modifier', array('type' => $this->type, 'value' => $this->value));
    }

    /**
     * @param string $type
     * @throws \InvalidArgumentException
     */
    protected function setType($type)
    {
        $type = strtoupper($type);
        if (! in_array($type, $this->allTypes))
            throw new \InvalidArgumentException('Invalid attribute type key given');

        $this->type = $type;
    }
}
