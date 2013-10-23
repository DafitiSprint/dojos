<?php

require 'BibliographicName.php';

class BibliographicNameTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider nameDataProvider
     */
    public function testParseNames($name, $expected)
    {
        $bibliographicName = new BibliographicName();

        $result = $bibliographicName->parse($name);

        $this->assertEquals($expected, $result);
    }

    public function nameDataProvider()
    {
        return array(
            array('Jose Silva', 'SILVA, Jose'),
            array('Maria Silva', 'SILVA, Maria'),
            array('marco Antonio', 'ANTONIO, Marco'),
            array('Jose Silva Pereira', 'PEREIRA, Jose Silva'),
            array('Celso de Araujo', 'ARAUJO, Celso de'),
            array('Maria dos Anjos', 'ANJOS, Maria dos'),
            array('Joao silva Neto', 'SILVA NETO, Joao'),);

    }
}
