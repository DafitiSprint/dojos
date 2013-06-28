<?php

class Collatz
{
	private $count = 1;

	public function getSequenceSize($number)
	{
		
		if (1 == $number) {			
			return 1;
		}

		if ($number % 2 == 0) {
			$number = $number / 2;
		} else {
			$number = (3 * $number) + 1;
		}
		$this->count++;
		$this->getSequenceSize($number);		

		return $this->count;
	}

	public function getGreatestByRange($rangeLimit)
	{
		$size = 1;
		$number=1;

		for($i = 1; $i <= $rangeLimit; $i++) {
			$this->count = 0;
			$newSize = $this->getSequenceSize($i);
			if($size < $newSize){
				$size = $newSize;
				$number = $i;
			}
		}
		return $number;
	}
}