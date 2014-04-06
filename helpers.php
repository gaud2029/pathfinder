<?php

/**
 * return the public properties of an object
 * @param $object
 * @return array
 * @throws InvalidArgumentException
 */
function getPublicProperties($object)
{
    if (! is_object($object))
        throw new InvalidArgumentException('function ' . __FUNCTION__ . ' requires an object.');

    return get_object_vars($object);
}

/**
 * take array and create keys from the values if the keys are numeric
 * @param array $array
 * @return array
 */
function prepareArrayForDropdown(array $array)
{
    $preparer = new \Pathfinder\Forms\Helper\InputValuesPreparer($array);
    return $preparer->prepare();
}

/**
 * @param array $array
 * @return bool
 */
function array_is_assoc(array $array)
{
    return ! array_is_numeric($array);
}

/**
 * check if given array is numeric
 *
 * @param array $array
 * @return boolean
 */
function array_is_numeric(array $array)
{
    // this is cheaper than return $array === array_values($array)
    // because it will spot an assoc array immediately and only loop over the array if it is numeric,
    // instead of first creating a copy array and then checking the 2 complete arrays
    foreach ($array as $key => $val)
    {
        if (! is_int($key))
            return false;
    }

    return true;
}
