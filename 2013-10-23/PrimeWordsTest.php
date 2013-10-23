<?php

require_once 'PrimeWords.php';

class PrimeWordTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider wordProvider
     */
    public function testShouldReturnIfWordIsPrime($word, $expected)
    {
        $primeWords = new PrimeWords();
        $result = $primeWords->isPrime($word);

        $this->assertEquals($expected, $result);
    }

    public static function wordProvider()
    {
        return array(
            array('a', false),
            array('b', true),
            array('c', true),
            array('d', false),
            array('e', true),
            array('A', false),
            array('C', true),
            array('aa', true),
            array('ab', true),
            array('aaa', true),
            array('AA', false),
            array('AB', false),
            array('Abc', false),
            array('AcAca', true),

        );
    }

}
