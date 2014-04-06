<?php
require_once 'MatrixAnalyzer.php';

class MatrixAnalyzerTest extends PHPUnit_Framework_TestCase
{
    public function testShouldReturn32When5x5onLineOne()
    {
        $matrix = array(
            array(2, 2, 2, 2, 2),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
        );

        $matrixAnalyze = new MatrixAnalyzer($matrix);

        $expected = 32;
        $result = $matrixAnalyze->getMaxProduct();

        $this->assertEquals($result, $expected);
    }
    
    public function testShouldValidateVerticalSizeOfArray()
    {    
        $matrix = array(
            array(2, 2, 2, 2, 2),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
        );

        $matrixAnalyze = new MatrixAnalyzer($matrix);

        $expected = 5;
        $result = $matrixAnalyze->getMatrixVerticalSize();

        $this->assertEquals($result, $expected);
    }

    public function testShouldValidateHorizontalSizeOfArray()
    {
        $matrix = array(
            array(2, 2, 2, 2, 2),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
        );

        $matrixAnalyze = new MatrixAnalyzer($matrix);

        $expected = 5;
        $result = $matrixAnalyze->getMatrixHorizontalSize();

        $this->assertEquals($result, $expected);
    }
    
    public function testShouldReturn16When5x5onLineOne()
    {
        $matrix = array(
            array(1, 2, 2, 2, 2),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
        );

        $matrixAnalyze = new MatrixAnalyzer($matrix);

        $expected = 16;
        $result = $matrixAnalyze->getMaxProduct();

        $this->assertEquals($result, $expected);
    }

}
