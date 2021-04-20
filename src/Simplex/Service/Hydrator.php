<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 20/04/2021
 * Time: 12:45
 */


namespace Simplex\Service;


class Hydrator
{
    public static function hydrate($object, array $data)
    {
        foreach ($data as $property => $value) {
            $method = 'set'.ucfirst($property);
            if (method_exists($object, $method)) {
                $object->$method($value);
            }
        }
    }
}
