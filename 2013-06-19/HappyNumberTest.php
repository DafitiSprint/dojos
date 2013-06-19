<?php

require_once('HappyNumber.php');

class HappyNumberTest extends PHPUnit_Framework_TestCase
{
	
	public function testIsHappy1()
	{
		$number = 1;
		$happyNumber = new HappyNumber();
		$result = $happyNumber->isHappy($number);
		$this->assertTrue($result);
	}

	public function testIsHappy10()
	{
		$number = 10;
		$happyNumber = new HappyNumber();
		$result = $happyNumber->isHappy($number);
		$this->assertTrue($result);
	}

	public function testIsHappy130()
	{
		$number = 130;
		$happyNumber = new HappyNumber();
		$result = $happyNumber->isHappy($number);
		$this->assertTrue($result);
	}	
}