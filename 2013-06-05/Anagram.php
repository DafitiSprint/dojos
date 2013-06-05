<?php

class Anagram{

	public function generate($word)
	{
		
		if (strlen($word) == 2) {
			return $this->flipTwoLetters($word);
		}

		$result = array();
		for ($i =0; $i < strlen($word); $i++) {
			
			$flip = $this->flipTwoLetters(str_replace($word[$i],'',$word));

			foreach($flip as $f)
			{
				$result[] = $word[$i] . $f;
			}
		}
		return $result;
	}

	public function flipTwoLetters($twoLetters)
	{
		$returnArray[0] = $twoLetters;
		$returnArray[1] = strrev($twoLetters);

		return $returnArray;
	}
}