<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 25/11/14
 * Time: 17:23
 */

namespace OKLM\Validator;


class DateTimeValidator
{
    public static function isMajor(\Datetime $birthday)
    {
        $dateNow = new \DateTime();
        $diffBetween = $birthday->diff($dateNow);
        return ($diffBetween->y >= 18) ? true : false;
    }
    public static function isPassed(\Datetime $date)
    {
        $dateNow = new \DateTime();
        return ($date < $dateNow) ? true : false;
    }
    public static function isFuture(\Datetime $date)
    {
        $dateNow = new \DateTime();
        return ($date > $dateNow) ? true : false;
    }
    public static function isYear(\Datetime $date, $year)
    {
        if(!is_int($year))
            throw new \Exception('The second parameter need to be a string');
        return ((int) $date->format('Y') === $year) ? true : false;
    }
    public static function isMonth(\Datetime $date, $month)
    {
        if(!is_int($month))
            throw new \Exception('The second parameter need to be a integer');
        return ((int) $date->format('m') === $month) ? true : false;
    }
    public static function isDay(\Datetime $date, $day)
    {
        if(!is_int($day))
            throw new \Exception('The second parameter need to be a integer');
        return ((int) $date->format('d') === $day) ? true : false;
    }

} 