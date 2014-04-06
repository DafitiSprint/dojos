<?php

require 'Buy.php';

class BuyTest extends PHPUnit_Framework_TestCase
{
    public function testNewBuy()
    {
        $buy = new Buy(10);

        $expected = 10;
        $result = $buy->getValue();

        $this->assertEquals($expected, $result);
    }

    public function testShouldReturnNoChange()
    {
        $change = new Buy(10);
        $result = $change->getBuy(10);
        $this->assertEquals(array(), $result);
    }

    public function testShouldReturnOneMoney()
    {
        $change = new Buy(9);
        $result = $change->getBuy(10);
        $this->assertEquals(array(1=>1), $result);
    }

    public function testShouldReturnFiveMoneys()
    {
        $change = new Buy(5);
        $result = $change->getBuy(10);
        $this->assertEquals(array(5=>1), $result);
    }

    public function testShoulReturnTwoBillsOfOne()
    {
        $change = new Buy(8);
        $result = $change->getBuy(10);
        $this->assertEquals(array(1=>2), $result);
    }
}
