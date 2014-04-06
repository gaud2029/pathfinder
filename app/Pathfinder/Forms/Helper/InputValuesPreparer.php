<?php namespace Pathfinder\Forms\Helper;

/**
 * Class InputValuesPreparer
 * @package Pathfinder\Forms\Helper
 *
 * InputValuesPreparer is responsible for preparing arrays to be used by the inputs that have multiple values
 */
class InputValuesPreparer
{
    /** @var array */
    protected $data;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function prepare()
    {
        if (array_is_assoc($this->data))
            return $this->data;

        // Array with table structure
        if ($this->isTableArray())
            return $this->convertToKeyValue();

        // single numeric array
        return array_combine($this->data, $this->data);
    }

    /**
     * @return bool
     */
    protected function isTableArray()
    {
        return (   is_array($this->data[0])
                && count($this->data[0]) == 2
                && array_keys($this->data[0]) === array_keys(end($this->data))
               );
    }

    /**
     * @return array
     */
    protected function convertToKeyValue()
    {
        $result = array();
        foreach ($this->data as $row)
            $result[reset($row)] = end($row); // first column is key, second column is value

        return $result;
    }
}
