<?php

class HappyNumber
{
	private $results;

	public function isHappy($number)
	{
		$numbers = 0;
		$number = (string)$number;
		
		for($i = 0; $i < strlen($number); $i++)
		{
			$numbers += pow($number[$i],2);
		}

		return ($numbers == 1);
	}
}