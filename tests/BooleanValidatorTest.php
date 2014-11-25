<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 25/11/14
 * Time: 17:58
 */

namespace tests\OKLM\Validator;

use OKLM\Validator\BooleanValidator;

class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the boolean is true
     *
     * @throws \Exception
     */
    public function testTrue()
    {
        $bool = BooleanValidator::isTrue(true);
        $this->assertTrue($bool);
    }
    /**
     * Test if the boolean is not true
     *
     * @throws \Exception
     */
    public function testIsNotTrue()
    {
        $bool = BooleanValidator::isTrue(false);
        $this->assertFalse($bool);
    }

}