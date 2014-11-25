<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 24/11/14
 * Time: 20:21
 */

namespace OKLM\Validator;


class StringValidator
{
    public function __construct()
    {
    }

    public static function equal($integer,$string)
    {
        if(!is_string($string) || !is_int($integer))
            throw new \Exception('The parameters must be an Integer and a String');

        if($integer==mb_strlen($string))
            return true;
        else
            return false;
    }

    public static function superior($integer,$string)
    {
        if(!is_string($string) || !is_int($integer))
            throw new \Exception('The parameters must be an Integer and a String');

        if($integer<mb_strlen($string))
            return true;
        else
            return false;
    }

    public static function inferior($integer,$string)
    {
        if(!is_string($string) || !is_int($integer))
            throw new \Exception('The parameters must be an Integer and a String');

        if($integer>mb_strlen($string))
            return true;
        else
            return false;
    }

    public static function lengthBetween($start,$end,$string)
    {
        if(!is_string($string) || !is_int($start) || !is_int($end))
            throw new \Exception('The parameters must be an Integer and a String');

        if(mb_strlen($string)<$end && mb_strlen($string)>$start)
            return true;
        else
            return false;
    }

    public static function space_start_end($string)
    {
        if(!is_string($string))
            throw new \Exception('The parameters must be an Integer and a String');

        if(mb_substr($string,0,1)==" " && mb_substr($string,mb_strlen($string)-1,1)==" ")
            return true;
        else
            return false;
    }

    public static function noWhiteSpace($string)
    {
        if(!is_string($string))
            throw new \Exception('The parameters must be an Integer and a String');

        for($i=0;$i<=mb_strlen($string)-1;$i++)
        {
            if(mb_substr($string,$i,1)==" ")
            {
                return false;
                break;
            }
            elseif($i==mb_strlen($string)-1)
            {
                return true;
            }
        }
    }
} 