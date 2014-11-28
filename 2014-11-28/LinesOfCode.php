<?php

class LinesOfCode
{
	private $text;

	public function __construct($text) {
		$this->text = $text;
	}
	public function count()
	{
		$arrayLines = explode(PHP_EOL, $this->text);
		$linesCounter = 0;

		foreach ($arrayLines as $line) {
			if ($this->isInvalidCodeLine($line)) {
				continue;
			}

			$linesCounter++;
		}
		return $linesCounter;
	}

	private function isInvalidCodeLine($line) {
		return empty($line) ||
				preg_match("/^\s+$/", $line) ||
				preg_match("/^(\/\/)/", $line);

	}
}