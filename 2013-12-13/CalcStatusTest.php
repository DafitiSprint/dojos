<?php

require 'CalcStatus.php';

class CalcStatusTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProviderForMinValues
     */
    public function testShouldReturnMinValue($value, $expected)
    {
        $calcStatus = new CalcStatus($value);

        $this->assertEquals($expected, $calcStatus->findMinValue());
    }

    public function dataProviderForMinValues()
    {
        return array(
            array('value' => array(1), 'expected' => 1),
            array('value' => array(2), 'expected' => 2),
            array('value' => array(2,1), 'expected' => 1)
        );
    }
}
