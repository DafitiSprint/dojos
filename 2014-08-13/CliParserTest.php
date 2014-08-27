<?php

include "CliParser.php";

class CliParserTest extends PHPUnit_Framework_TestCase
{
    public function testShouldParseShortOption()
    {
        $parser = new CliParser();

        $parser->setOptions(array("-l" => "present"));
        $parser->setInput("-l");

        $this->assertTrue($parser->has("-l"));
    }

    public function testShouldReturnFalseWhenShortOptionsDontExist()
    {
        $parser = new CliParser();
        $parser->setInput("-k");
        $this->assertFalse($parser->has('-j'));
    }


    public function testShouldFailWhenInputOptionDoesNotExist()
    {
        $parser = new CliParser();
        $parser->setOptions(array("-l" => "present"));
        $parser->setInput("-k");
        $this->assertFalse($parser->has('-l'));
    }

    public function testShouldReturnTrueWhenAllInputsExists()
    {
        $parser = new CliParser();
        $parser->setOptions(array('-l' => 'present', '-h' => 'present'));
        $parser->setInput('-l -h');

        $this->assertTrue($parser->has('-l'));
        $this->assertFalse($parser->has('-x'));
    }
    public function testShouldReturnOptionValueWithOneValue()
    {
        $argumentValue = 'test';
        $parser = new CliParser();
        $parser->setOptions(array('-l' => 'alpha'));
        $parser->setInput('-l ' . $argumentValue);

        $this->assertEquals($argumentValue, $parser->value('-l'));
    }
}
