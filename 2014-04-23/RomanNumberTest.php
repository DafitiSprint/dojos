<?php

require 'RomanNumber.php';

class RomanNumbersTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerRomans
     */ 
    public function testShouldConvert($number, $expected)
    {
        $romanNumber = new RomanNumber($number);
        $result = $romanNumber->getArabic();

        $this->assertEquals($expected, $result);
    }

    public function providerRomans()
    {
        return array(
            array('number' => 'I', 'expected' => 1),
            array('number' => 'II', 'expected' => 2),
            array('number' => 'III', 'expected' => 3), 
            array('number' => 'IV', 'expected' => 4),
            array('number' => 'V', 'expected' => 5),
            array('number' => 'X', 'expected' => 10),
        );
    }
}
