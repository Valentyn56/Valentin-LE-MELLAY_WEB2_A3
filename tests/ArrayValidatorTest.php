<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 25/11/14
 * Time: 17:33
 */

namespace tests\OKLM\Validator;

    use OKLM\Validator\ArrayValidator;

class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the array is empty
     *
     * @throws \Exception
     */
    public function testArrayIsEmpty()
    {
        $array = array();
        $bool = ArrayValidator::isEmpty($array);
        $this->assertTrue($bool);
    }
    /**
     * Test if the array is not empty
     *
     * @throws \Exception
     */
    public function testArrayIsNotEmpty()
    {
        $array = array('key' => 'chat');
        $bool = ArrayValidator::isEmpty($array);
        $this->assertFalse($bool);
    }
    /**
     * Test if the comparator() method throw exception if invalid parameter
     *
     *@expectedException \Exception
     */
    public function testException()
    {
        $array = array('Dogs' => 3);
        ArrayValidator::comparator($array, 'sd', 1);
    }
    /**
     * Test if the array is equal to a value
     *
     * @throws \Exception
     */
    public function testArrayIsEqualTo()
    {
        $array = array('Dogs' => 3);
        $bool = ArrayValidator::comparator($array, ArrayValidator::EQUAL, 1);
        $this->assertTrue($bool);
    }
    /**
     * Test if the array is not equal to a value
     *
     * @throws \Exception
     */
    public function testArrayIsNotEqualTo()
    {
        $array = array('Dogs' => 3);
        $bool = ArrayValidator::comparator($array, ArrayValidator::EQUAL, 3);
        $this->assertFalse($bool);
    }
    /**
     * Test if the is inferior to a value
     *
     * @throws \Exception
     */
    public function testArrayIsInferior()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);
        $bool = ArrayValidator::comparator($array, ArrayValidator::INFERIOR, 10);
        $this->assertTrue($bool);
    }
    /**
     * Test if the is superior to a value
     *
     * @throws \Exception
     */
    public function testArrayIsSuperior()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);
        $bool = ArrayValidator::comparator($array, ArrayValidator::SUPERIOR, 1);
        $this->assertTrue($bool);
    }
    /**
     * Test if the array's item is inferior or equal to a value
     *
     * @throws \Exception
     */
    public function testArrayIsInferiorOrEqual()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);
        $bool = ArrayValidator::comparator($array, ArrayValidator::INFERIOR_OR_EQUAL, 2);
        $this->assertTrue($bool);
    }
    /**
     * Test if the array's item is superior or equal to a value
     *
     * @throws \Exception
     */
    public function testArrayIsSuperiorOrEqual()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);
        $bool = ArrayValidator::comparator($array, ArrayValidator::SUPERIOR_OR_EQUAL, 2);
        $this->assertTrue($bool);
    }
    /**
     * Test if the array length is between two integer
     *
     * @throws \Exception
     */
    public function testIsBetween()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);
        $bool = ArrayValidator::elementsBetween($array, 1, 2);
        $this->assertTrue($bool);
    }
    /**
     * Test if the array length is not between two integer
     *
     * @throws \Exception
     */
    public function testIsNotBetween()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);
        $bool = ArrayValidator::elementsBetween($array, 3, 5);
        $this->assertFalse($bool);
    }
    /**
     * Test if the value exists in a array
     *
     * @throws \Exception
     */
    public function testValueInArray()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);
        $bool = ArrayValidator::valueExists($array, '3');
        $this->assertTrue($bool);
    }
    /**
     * Test if the value exists in a array
     *
     * @throws \Exception
     */
    public function testNotValueInArray()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);
        $bool = ArrayValidator::valueExists($array, '4');
        $this->assertFalse($bool);
    }
    /**
     * Test if the key exists in a array
     *
     * @throws \Exception
     */
    public function testKeyInArray()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);
        $bool = ArrayValidator::keyExists($array, 'Dogs');
        $this->assertTrue($bool);
    }
    /**
     * Test if the key exists in a array
     *
     * @throws \Exception
     */
    public function testNotKeyInArray()
    {
        $array = array('Dogs' => 3, 'Cats' => 10);
        $bool = ArrayValidator::keyExists($array, 'Ca');
        $this->assertFalse($bool);
    }

} 