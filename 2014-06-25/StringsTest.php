<?php

require 'Strings.php';

class StringsTest extends PHPUnit_Framework_TestCase
{
    public function testUcfirst()
    {
        $expected = 'Test';

        $string = new Strings('test');
        $result = $string->ucfirst();

        $this->assertEquals($expected, $result);
    }

    public function testUcfirstTest()
    {
        $expected = 'Test';

        $string = new Strings('Test');
        $result = $string->ucfirst();

        $this->assertEquals($expected, $result);
    }
    public function testUcfirstEmpty()
    {
        $expected = '';

        $string = new Strings('');
        $result = $string->ucfirst();

        $this->assertEmpty($result);
    }
    public function testShouldApplyUcwords()
    {
        $expected = 'Bora Trabalhar';

        $string = new Strings('bora trabalhar');
        $result = $string->ucwords();

        $this->assertEquals($expected, $result);
    }

    public function testShouldApplyUcWordsEmpty()
    {

        $string = new Strings('');
        $result = $string->ucwords();

        $this->assertEmpty($result);
    }

    public function testStrToUpper()
    {
        $expected = 'TESTE DOJO';
        $result = (new Strings('teste dojo'))->strtoupper();
        $this->assertEquals($expected, $result);
    }
    
    public function testStrToUpperEmpty()
    {
        $expected = '';
        $result = (new Strings(''))->strtoupper();
        $this->assertEquals($expected, $result);
    }
}
