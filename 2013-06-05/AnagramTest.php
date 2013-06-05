<?php

require_once('Anagram.php');

class AnagramTest extends PHPUnit_Framework_TestCase
{

	public function testTwoLetterWord()
	{
		$anagram = new Anagram();

		$result = $anagram->generate('hi');
		$expected = array('hi', 'ih');

		$this->assertEquals($expected, $result);

		$result = $anagram->generate('no');
		$expected = array('no', 'on');

		$this->assertEquals($expected, $result);
	}

	public function testThreeLetterWord() 
	{
		$anagram = new Anagram();

		$result = $anagram->generate('ola');
		$expected = array('ola', 'oal', 'loa', 'lao', 'aol', 'alo');

		$this->assertEquals($expected, $result);
	}

	public function testFourLetterWord() 
	{
		$anagram = new Anagram();

		$result = $anagram->generate('pato');

		$this->assertCount(24, $result);
	}
}