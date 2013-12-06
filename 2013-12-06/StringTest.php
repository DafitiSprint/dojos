<?php
include_once('String.php');
class StringTest extends PHPUnit_Framework_TestCase
{
    public function testExplodeShouldReturnOnePositionArray()
    {
        $expected = array('a');
        $result = String::explode('|','a');

        $this->assertSame($expected, $result);
    }

    public function testExplodeShouldReturnSplitedString(){
        $expected = array('a', 'b');
        $result = String::explode('.', 'a.b');

        $this->assertEquals($expected, $result);
    }

    public function testExplodeShouldReturnThreeSplittedStrings() {
        $expected = array('1', '2', '3');
        $result = String::explode(',', '1,2,3');

        $this->assertEquals($expected, $result);
    }

    public function testExplodeShouldReturnSplitedString2(){
        $expected = array('aa', 'b');
        $result = String::explode('.', 'aa.b');

        $this->assertEquals($expected, $result);
    }

}
