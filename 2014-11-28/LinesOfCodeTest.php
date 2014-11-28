<?php

require "LinesOfCode.php";

class LinesOfCodeTest extends PHPUnit_Framework_TestCase
{
	public function testShouldReturn1line() {
		$expected = 1;
		$lines = 'echo "Helloworld";';

		$counter = new LinesOfCode($lines);
		$result = $counter->count();
		$this->assertEquals($expected, $result);
	}

	public function testShouldReturn2line() {
		$expected = 2;
		$lines = " if (true)
			echo 'Helloworld';";

		$counter = new LinesOfCode($lines);
		$result = $counter->count();
		$this->assertEquals($expected, $result);
	}

	public function testShouldReturn3line() {
		$expected = 3;
		$lines = " if (true)
			echo 'Helloworld';
			echo 'bla bla bla'";

		$counter = new LinesOfCode($lines);
		$result = $counter->count();
		$this->assertEquals($expected, $result);
	}

	public function testShouldReturn2Line1BlankLine() {
		$expected = 2;
		$lines = " if (true)

			echo 'bla bla bla'";

		$counter = new LinesOfCode($lines);
		$result = $counter->count();
		$this->assertEquals($expected, $result);
	}

	public function testShouldReturn2Line1BlankLineWithWhiteSpaces() {
		$expected = 2;
		$lines = " if (true)
  
			echo 'bla bla bla'";

		$counter = new LinesOfCode($lines);
		$result = $counter->count();
		$this->assertEquals($expected, $result);
	}

	public function testShouldReturn2Lines1CommentedLine() {
		$expected = 2;
		$lines = " if (true)
  			// Hola!!
			echo 'bla bla bla'";

		$counter = new LinesOfCode($lines);
		$result = $counter->count();
		$this->assertEquals($expected, $result);
	}

}