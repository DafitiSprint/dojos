<?php
require_once("Collatz.php");
/**
* 
*/
class CollatzTest extends PHPUnit_Framework_TestCase
{

	/**
	 * @dataProvider numberProvider
	 */
	public function testShouldReturnSequenceSize($number,$expected)
	{
		$collatz = new Collatz();

		$result = $collatz->getSequenceSize($number);

		$this->assertEquals($expected,$result);
	}

	public static function numberProvider()
	{
		return array(
			array(1,1),
			array(2,2),
			array(4,3),
			array(8,4),
			array(16,5),
			array(5,6),
			array(3,8),
			array(13,10)
		);
	}

	public function testGreatestSequenceSize()
	{
		$rangeLimit = 5;
		$expected = 3;

		$collatz = new Collatz();
		$result = $collatz->getGreatestByRange($rangeLimit);

		$this->assertEquals($expected, $result);
	}
}
