<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 25/11/14
 * Time: 17:49
 */

namespace tests\OKLM\Validator;

use OKLM\Validator\StringValidator;

class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the generated string is equal to a specific length
     *
     * @throws \Exception
     */
    public function testStringIsEqual()
    {
        $string = str_shuffle("98haabfvapobcçh3");
        $length = mb_strlen($string);
        $bool = StringValidator::equal($string, $length);
        $this->assertTrue($bool);
    }
    /**
     * Test if the generated string is not equal to a specific length
     *
     * @throws \Exception
     */
    public function testStringIsNotEqual()
    {
        $string = str_shuffle("98haaospsjbafoihj9ç");
        $length = mb_strlen($string);
        $bool = StringValidator::equal($string, $length - 10);
        $this->assertFalse($bool);
    }
    /**
     * Test if the generated string is superior to a specific int
     *
     * @throws \Exception
     */
    public function testStringIsSuperior()
    {
        $string = str_shuffle("98haaospsjbafoihj9ç");
        $bool = StringValidator::superior($string , 1);
        $this->assertTrue($bool);
    }
    /**
     * Test if the generated string is not superior to a specific int
     *
     * @throws \Exception
     */
    public function testStringIsNotSuperior()
    {
        $string = str_shuffle("98haaospsjbafoihj9ç");
        $bool = StringValidator::superior($string , 9999);
        $this->assertFalse($bool);
    }
    /**
     * Test if the generated string is inferior to a specific int
     *
     * @throws \Exception
     */
    public function testStringIsInferior()
    {
        $string = str_shuffle("98haaospsjbafoihj9ç");
        $length = mb_strlen($string) + 10;
        $bool = StringValidator::inferior($string , $length);
        $this->assertEquals($bool, true);
    }
    /**
     * Test if the generated string is not inferior to a specific int
     *
     * @throws \Exception
     */
    public function testStringIsNotInferior()
    {
        $string = str_shuffle("98haaospsjbafoihj9ç");
        $length = mb_strlen($string);
        $bool = StringValidator::inferior($string , $length - 10);
        $this->assertFalse($bool);
    }
    /**
     * Test if the generated string is between two specific int
     *
     * @throws \Exception
     */
    public function testStringIsBetween()
    {
        $string = str_shuffle("98haaospsjbafoihj9ç");
        $length = mb_strlen($string);
        $bool = StringValidator::lengthBetween($string , $length - 10, $length + 10);
        $this->assertTrue($bool);
    }
    /**
     * Test if the generated string is not between two specific int
     *
     * @throws \Exception
     */
    public function testStringIsNotBetween()
    {
        $string = str_shuffle("98haaospsjbafoihj9ç");
        $length = mb_strlen($string);
        $bool = StringValidator::lengthBetween($string , $length + 10, $length - 10);
        $this->assertFalse($bool);
    }
    /**
     * Test if the generated string has white space ar the start or the end
     *
     * @throws \Exception
     */
    public function testStrignHasWhiteSpaceStartEnd()
    {
        $string = " 98haaospsjbafoihj9ç ";
        $bool = StringValidator::space_start_end($string);
        $this->assertTrue($bool);
    }
    /**
     * Test if the generated string has no white space ar the start or the end
     *
     * @throws \Exception
     */
    public function testStringHasNoWhiteSpaceStartEnd()
    {
        $string = "98haaospsjbafoihj9ç";
        $bool = StringValidator::space_start_end($string);
        $this->assertFalse($bool);
    }
    /**
     * Test if the generated string has no whitespace
     *
     * @throws \Exception
     */
    public function testStringHasWhiteSpace()
    {
        $string = "4azdaazdq sdqé qsd78cdfp liok";
        $bool = StringValidator::noWhiteSpace($string);
        $this->assertTrue($bool);
    }
    /**
     * Test if the generated string has no whitespace
     *
     * @throws \Exception
     */
    public function testStringHasNoWhiteSpace()
    {
        $string = "4azdaazdqsdqéqsd 78cdfpiok";
        $bool = StringValidator::noWhiteSpace($string);
        $this->assertFalse($bool);
    }
}