<?php

require 'Screen.php';

class ScreenTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage $input value is not allowed
     */
    public function testShouldThrowAnExceptionWhenNumberIsInvalid() 
    {
        $screen = new Screen('Satanas');
    }

    public function lcdProvider() 
    {
        return array(
            array(0, array(
                '._.',
                '|.|',
                '|_|',
            )),
            array(1, array(
                '...',
                '..|',
                '..|',
            )),
        );
    }

    /**  
    * @dataProvider lcdProvider 
    */
    public function testConvertUsingLcdProvider( $value, $expected )
    {
        $screen = new Screen($value);

        $result = $screen->convert();
        $this->assertEquals($expected, $result);

    }



}
