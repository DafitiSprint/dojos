<?php

require "ZeroSumFinder.php";

class ZeroSumFinderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testShouldReturnIndexWithRandomArrays($expected, $input)
    {
        $sumFinder = new ZeroSumFinder($input);

        $this->assertEquals($expected, $sumFinder->find());
    } 

    public function dataProvider()
    {
        return [
            [[[0, 0]], [0]],
            [[[0, 1]], [1, -1]],
        ];
    }
}
