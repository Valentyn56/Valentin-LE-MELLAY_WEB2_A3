<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 24/11/14
 * Time: 19:52
 */

namespace OKLM\Validator;


class IntegerValidator {

    public function __construct()
    {
    }

    public static function equal($var1 , $var2)
    {
        if(!is_int($var1) || !is_int($var2))
            throw new \Exception('Parameters needs to be Integers');

        if($var1 == $var2){
            return true;
        }
        else
        {
            return false;
        }
    }


    public static function superior($var1,$var2)
    {
        if(!is_int($var1) || !is_int($var2))
            throw new \Exception('Parameters needs to be Integers');

        if($var1 > $var2){
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function inferior($var1,$var2)
    {
        if(!is_int($var1) || !is_int($var2))
            throw new \Exception('Parameters needs to be Integers');

        if($var1 < $var2){
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function between($start,$end,$var)
    {
        if(!is_int($var) || !is_int($end) || !is_int($start))
            throw new \Exception('Parameters needs to be Integers');

        if($var>=$start && $var<=$end)
        {
            return true;
        }else{
            return false;
        }
    }

    public static function is_positive($var)
    {
        if(!is_int($var))
            throw new \Exception('Parameters needs to be Integers');

        if($var > 0){
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function is_negative($var)
    {
        if(!is_int($var))
            throw new \Exception('Parameters needs to be Integers');

        if($var < 0){
            return true;
        }
        else
        {
            return false;
        }
    }


} 