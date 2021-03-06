<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 25/11/14
 * Time: 18:01
 */

namespace tests\OKLM\Validator;

use OKLM\Validator\DateTimeValidator;

class DateTimeValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the date is major
     *
     * @throws \Exception
     */
    public function testIsMajor()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $birthdate = new \DateTime('12/14/1993 00:00:00');
        $bool = DateTimeValidator::isMajor($birthdate);
        $this->assertTrue($bool);
    }
    /**
     * Test if the date is not major (over 18 years)
     *
     * @throws \Exception
     */
    public function testIsNotMajor()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $birthdate = new \DateTime('12/14/2000 00:00:00');
        $bool = DateTimeValidator::isMajor($birthdate);
        $this->assertFalse($bool);
    }
    /**
     * Test if the date is passed
     *
     * @throws \Exception
     */
    public function testIsPassed()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isPassed($date);
        $this->assertTrue($bool);
    }
    /**
     * Test if the date is not passed
     *
     * @throws \Exception
     */
    public function testIsNotPassed()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2020 00:00:00');
        $bool = DateTimeValidator::isPassed($date);
        $this->assertFalse($bool);
    }
    /**
     * Test if the date is future
     *
     * @throws \Exception
     */
    public function testIsFuture()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2020 00:00:00');
        $bool = DateTimeValidator::isFuture($date);
        $this->assertTrue($bool);
    }
    /**
     * Test if the date is not future
     *
     * @throws \Exception
     */
    public function testIsNotFuture()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isFuture($date);
        $this->assertFalse($bool);
    }
    /**
     * Test if the date's year is equal
     *
     * @throws \Exception
     */
    public function testIsYear()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isYear($date, 2010);
        $this->assertTrue($bool);
    }
    /**
     * Test if the date's year is not equal
     *
     * @throws \Exception
     */
    public function testIsNotYear()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isYear($date, 2012);
        $this->assertFalse($bool);
    }
    /**
     * Test if the date's year is equal
     *
     * @throws \Exception
     */
    public function testIsMonth()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isMonth($date, 12);
        $this->assertTrue($bool);
    }
    /**
     * Test if the date's year is not equal
     *
     * @throws \Exception
     */
    public function testIsNotMonth()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isMonth($date, 11);
        $this->assertFalse($bool);
    }
    /**
     * Test if the date's year is equal
     *
     * @throws \Exception
     */
    public function testIsDay()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isDay($date, 14);
        $this->assertTrue($bool);
    }
    /**
     * Test if the date's year is not equal
     *
     * @throws \Exception
     */
    public function testIsNotDay()
    {
        //if not set, throw error
        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime('12/14/2010 00:00:00');
        $bool = DateTimeValidator::isDay($date, 11);
        $this->assertFalse($bool);
    }
}