<?php

include 'SpiralMatrix.php';

class SpiralMatrixTest extends PHPUnit_Framework_TestCase {
    public function testGenerateMatrix2x2()
    {
        $expected = array(
            array(1, 2),
            array(4, 3)
        );
        $result = SpiralMatrix::generate(2,2);

        $this->assertEquals($expected, $result);
    }

    public function testGenerateMatrix3x2()
    {
        $expected = array(
            array(1, 2, 3),
            array(6, 5, 4)
        );
        $result = SpiralMatrix::generate(3,2);

        $this->assertEquals($expected, $result);
    }

    public function testGenerateMatrix3x3()
    {
        $expected = array(
            array(1, 2, 3),
            array(8, 9, 4),
            array(7, 6, 5),
        );
        $result = SpiralMatrix::generate(3,3);

        $this->assertEquals($expected, $result);
    }
}
