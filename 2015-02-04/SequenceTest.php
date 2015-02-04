<?php

include 'Sequence.php';
class SequenceTest extends PHPUnit_Framework_TestCase
{
    public function testShouldGroupOneElement()
    {
        $sequence = new Sequence([1]);

        $result = $sequence->group();
        $expected = [[1]];
        $this->assertEquals($expected, $result);
    }

    public function testShouldGroupTwoElements()
    {
        $sequence = new Sequence([1, 2]);

        $result = $sequence->group();
        $expected = [[1, 2]];

        $this->assertEquals($expected, $result);
    }

    public function testShouldGroupThreeElements()
    {
        $sequence = new Sequence([1, 2, 3]);

        $result = $sequence->group();
        $expected = [[1, 3]];

        $this->assertEquals($expected, $result);
    }

    public function testShouldGroupTwoGroupsOfOneElement()
    {
        $sequence = new Sequence([1, 3]);

        $result = $sequence->group();
        $expected = [[1], [3]];

        $this->assertEquals($expected, $result);
    }

    public function testShouldGroupThreeGroupsElement()
    {
        $sequence = new Sequence([1, 2, 3, 5, 7]);

        $result = $sequence->group();
        $expected = [[1, 3], [5], [7]];

        $this->assertEquals($expected, $result);
    }
}
