<?php namespace Pathfinder\ViewHelpers;

use Illuminate\Support\Contracts\RenderableInterface;

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
    public function __construct($type, $value = null)
    {
        $this->allTypes = array('STR', 'DEX', 'CON', 'INT', 'WIS', 'CHA');
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
            throw new \InvalidArgumentException('Invalid attribute type key given: "'.$type.'"');

        $this->type = $type;
    }

    /**
     * @param $value
     * @throws \InvalidArgumentException
     */
    public function setValue($value)
    {
        if (! is_numeric($value) || $value < -10 || $value > 20)
            throw new \InvalidArgumentException('Invalid value given for Attribute modifier');

        $this->value = (int) $value;
    }

}
