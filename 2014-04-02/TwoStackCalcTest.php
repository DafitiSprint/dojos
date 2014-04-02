<?php

require 'TwoStackCalc.php';

class TwoStackCalcTest extends PHPUnit_Framework_TestCase
{
    public function testShouldBuildObject()
    {
        $twoStackCalc = new TwoStackCalc("(2 + 2)");

        $this->assertInstanceOf('TwoStackCalc', $twoStackCalc);
    }
    
    /**
     * @expectedException Exception 
     */
    public function testShouldThrowExceptionWhenInvalidNumberOfParenthesisFound()
    {
        $twoStackCalc = new TwoStackCalc("(2 + 2");
        
    }

    /**
     * @expectedException Exception
     */
    public function testShouldThrowExceptionWhenInvalidSyntax()
    {
        $twoStackCalc = new TwoStackCalc("(2 + 2 + )");
    }

    public function testShouldFormatExpression()
    {
        $twoStackCalc = new TwoStackCalc("(2 + 2)");
        $result = $twoStackCalc->getExpression();

        $this->assertFalse(strstr($result, " "));
    }

    public function test2x2ShouldReturn4()
    {
        $twoStackCalc = new TwoStackCalc("(2 * 2)");
        $result = $twoStackCalc->calculate();

        $this->assertEquals(4, $result);
    }


}
