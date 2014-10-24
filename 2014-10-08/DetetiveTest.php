
<?php

include "Detetive.php";

class DetetiveTest extends PHPUnit_Framework_TestCase{
	

	public function testShouldReturnOnlyElement()
	{
		$expected = 1;
		$list = [1];

		$detetive = new Detetive($list);
		$this->assertEquals($expected, $detetive->search());
	}

	public function testShouldReturnNullIfInputIsEmptyArray()
	{	
		$expected = null;
		$detetive = new Detetive();
		$this->assertEquals($expected, $detetive->search());	
	}

	public function testShouldReturnNullIfSameLowestFrequency()
	{	
		$expected = null;
		$list = [1,2];

		$detetive = new Detetive($list);
		$this->assertEquals($expected, $detetive->search());
	}
}