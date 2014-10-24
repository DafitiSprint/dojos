<?php

class RubiksCube
{
	private $pattern = [];

	public function __construct(array $pattern)
	{
		$this->pattern = $pattern;
	}

	public function move($direction)
	{
		$pattern = $this->pattern;

		switch($direction) {
			case "right":
				$this->pattern['front'] = $pattern['left'];
				$this->pattern['right'] = $pattern['front'];
				$this->pattern['back'] = $pattern['right'];
				$this->pattern['left'] = $pattern['back'];	
				break;
			case "left":
				$this->pattern['front'] = $pattern['right'];
				$this->pattern['right'] = $pattern['back'];
				$this->pattern['back'] = $pattern['left'];
				$this->pattern['left'] = $pattern['front'];
				break;
			case "forward":
				$this->pattern['front'] = $pattern['bottom'];
				$this->pattern['top'] = $pattern['front'];
				$this->pattern['back'] = $pattern['top'];
				$this->pattern['bottom'] = $pattern['back'];
			default: break;
		}
		
		return $this->pattern;
	}


}