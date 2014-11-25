<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 24/11/14
 * Time: 20:54
 */

namespace OKLM\Validator;


class ArrayValidator
{
    const EQUAL = 1;
    const INFERIOR = 2;
    const SUPERIOR = 3;
    const INFERIOR_OR_EQUAL = 4;
    const SUPERIOR_OR_EQUAL = 5;

    public function __construct()
    {
    }

    public static function isEmpty($array)
    {
        if(!is_array($array))
            throw new \Exception('The parameter must be an array');
        if(count($array)==0)
            return true;
        else
            return false;
    }


    public static function comparator($array, $comparator, $int)
    {
        if(!is_array($array) || !is_int($int))
            throw new \Exception('The parameters must be an array and an Integer');
        if (!in_array($comparator,
            [
            self::EQUAL,
            self::INFERIOR,
            self::SUPERIOR,
            self::SUPERIOR_OR_EQUAL,
            self::INFERIOR_OR_EQUAL,
             ]))
            {
            throw new \InvalidArgumentException('The 2nd parameter must be an array');
            }

        $length = count($array);
        $result = 0;
        switch ($comparator) {
            case self::EQUAL:
                $result = $length === $int;
                break;
            case self::INFERIOR:
                $result = $length < $int;
                break;
            case self::SUPERIOR:
                $result = $length > $int;
                break;
            case self::INFERIOR_OR_EQUAL:
                $result = $length <= $int;
                break;
            case self::SUPERIOR_OR_EQUAL:
                $result = $length >= $int;
                break;
            default:
                throw new \Exception('The function has met an error');
        }
        return $result;
    }



    public static function elementsBetween($array, $start, $end)
    {
        if(!is_array($array) || !is_int($start) || !is_int($end))
            throw new \Exception('The first parameter must be an array, and the two others Integer');
        if( count($array)>=$start && count($array)<=$end)
            return true;
        else
            return false;
    }



    public static function keyExists($array, $key)
    {
        if(!is_array($array) || !is_string($key))
            throw new \Exception('The first parameter must be an array and the other a String');
        if(array_key_exists($key, $array))
            return true;
        else
            return false;
    }


    public static function valueExists($array, $value)
    {
        if(!is_array($array) || !is_string($value))
            throw new \Exception('The first parameter must be an array and the other a String');
        if(in_array($value, $array))
            return true;
        else
            return false;
    }


} 