<?php
include_once "BibliographicName.php";

class BibliographicNameTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerNames
     */
    public function testParseNameForPabloDaSilva($nameString, $expected)
    {
        $bibliographicName = new BibliographicName();

        $result = $bibliographicName->parse($nameString);
        $this->assertEquals($expected, $result);
    }

    public static function providerNames()
    {
        return array(
            array('name' => 'Pablo Silva', 'expected' => 'SILVA, Pablo'),
            array('name' => 'pablo silva', 'expected' => 'SILVA, Pablo'),
            array('name' => 'pablo silva junior', 'expected' => 'SILVA JUNIOR, Pablo'),
            array('name' => 'pablo da silva', 'expected' => 'SILVA, Pablo da'),
            array('name' => 'pablo da silva junior', 'expected' => 'SILVA JUNIOR, Pablo da'),
        );
    }
}