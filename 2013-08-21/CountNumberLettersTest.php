<?php
require_once 'CountNumberLetters.php';
class CountNumberLettersTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider numberProvider
     */
    public function testCountLetters($number, $expected)
    {
        $result = CountNumberLetters::count($number);

        $this->assertEquals($expected, $result);
    }

    public static function numberProvider()
    {
        return array(
            array('number'=>1, 'expected' =>2),
            array('number'=>2, 'expected' =>4),
            array('number'=>3, 'expected' =>4),
            array('number'=>4, 'expected' =>6),
        );
    }

}
