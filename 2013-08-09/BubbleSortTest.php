<?php

require 'BubbleSort.php';

class BubbleSortTest extends PHPUnit_Framework_TestCase
{
    public function testOneNumber()
    {
        $expected = array(1);
        $result = BubbleSort::sort(array(1));

        $this->assertEquals($expected, $result);
    }

    public function testTwoOrderedNumbers()
    {
        $expected = array(1, 2);
        $result = BubbleSort::sort(array(1, 2));

        $this->assertEquals($expected, $result);
    }

    public function testTwoUnorderedNumbers()
    {
        $expected = array(1, 5);
        $result = BubbleSort::sort(array(5, 1));

        $this->assertEquals($expected, $result);
    }

    public function testThreeOrderedNumbers()
    {
        $expected = array(1, 2, 5);
        $result = BubbleSort::sort(array(1, 2, 5));

        $this->assertEquals($expected, $result);
    }

    public function testThreeUnorderedNumbers()
    {
        $expected = array(1, 2, 5);
        $result = BubbleSort::sort(array(2, 1, 5));

        $this->assertEquals($expected, $result);
    }

    public function testFourUnorderedNumbers()
    {
        $expected = array(1, 2, 3, 5);
        $result = BubbleSort::sort(array(5, 2, 1, 3));

        $this->assertEquals($expected, $result);
    }
}
