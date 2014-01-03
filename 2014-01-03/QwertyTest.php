<?php

require 'Qwerty.php';

class QwertyTest extends PHPUnit_Framework_TestCase
{
    private $qwerty;

    public function setUp()
    {
        $this->qwerty = new Qwerty();
    }

    public function tearDown()
    {
        $this->qwerty = null;
    }

    /**
     * @dataProvider keyProvider
     */
    public function testShouldReturnConvertedKeys($input, $expected)
    {
        $result = $this->qwerty->convert($input);

        $this->assertEquals($expected, $result);
    }
   
    public static function keyProvider()
    {
        return array(
            array('a', '2'),
            array('d', '3'),
            array('g', '4'),
            array('j', '5'),
            array('m', '6'),
            array('p', '7'),
            array('t', '8'),
            array('w', '9'),
            array('b', '22'),
            array('c', '222'),
            array('e', '33'),
            array('f', '333'),
            array('h', '44'),
            array('i', '444'),
            array('k', '55'),
            array('l', '555'),
            array('n', '66'),
            array('o', '666'),
            array('q', '77'),
            array('r', '777'),
            array('s', '7777'),
            array('u', '88'),
            array('v', '888'),
            array('x', '99'),
            array('y', '999'),
            array('z', '9999'),
            array(' ', '0'),
        );
        
    }

}

