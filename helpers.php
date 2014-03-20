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
        throw new InvalidArgumentException('function getPublicProperties requires an object.');

    return get_object_vars($object);
}