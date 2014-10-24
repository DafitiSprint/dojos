<?php

require 'RubiksCube.php';

class RubiksCubeTest extends PHPUnit_Framework_TestCase
{
	private $pattern;

	public function setUp() 
	{
		$this->pattern = [];
		$this->pattern['left'] = [['r', 'r', 'r'], ['r', 'r', 'r'], ['r', 'r', 'r']];
		$this->pattern['front'] = [['g', 'g', 'g'], ['g', 'g', 'g'], ['g', 'g', 'g']];
		$this->pattern['right'] = [['b', 'b', 'b'], ['b', 'b', 'b'], ['b', 'b', 'b']];
		$this->pattern['back'] = [['o', 'o', 'o'], ['o', 'o', 'o'], ['o', 'o', 'o']];
		$this->pattern['top'] = [['y', 'y', 'y'], ['y', 'y', 'y'], ['y', 'y', 'y']];
		$this->pattern['bottom'] = [['w', 'w', 'w'], ['w', 'w', 'w'], ['w', 'w', 'w']];

		$this->cube = new RubiksCube($this->pattern);

	}

	public function testShouldMoveCubeToRight()
	{
		$result = $this->cube->move('right');
		$expectedFront = [['r', 'r', 'r'], ['r', 'r', 'r'], ['r', 'r', 'r']];
		$expectedRight = [['g', 'g', 'g'], ['g', 'g', 'g'], ['g', 'g', 'g']];
		$expectedBack  = [['b', 'b', 'b'], ['b', 'b', 'b'], ['b', 'b', 'b']];
		$expectedLeft  = [['o', 'o', 'o'], ['o', 'o', 'o'], ['o', 'o', 'o']];

		$this->assertEquals($expectedFront, $result['front']);
		$this->assertEquals($expectedRight, $result['right']);
		$this->assertEquals($expectedBack, $result['back']);
		$this->assertEquals($expectedLeft, $result['left']);
	}

	public function testShouldMoveCubeToLeft()
	{
		$result = $this->cube->move('left');
		$expectedFront = [['b', 'b', 'b'], ['b', 'b', 'b'], ['b', 'b', 'b']];
		$expectedRight = [['o', 'o', 'o'], ['o', 'o', 'o'], ['o', 'o', 'o']];
		$expectedBack  = [['r', 'r', 'r'], ['r', 'r', 'r'], ['r', 'r', 'r']];
		$expectedLeft  = [['g', 'g', 'g'], ['g', 'g', 'g'], ['g', 'g', 'g']];
		
		$this->assertEquals($expectedFront, $result['front']);
		$this->assertEquals($expectedRight, $result['right']);
		$this->assertEquals($expectedBack, $result['back']);
		$this->assertEquals($expectedLeft, $result['left']);
	}

	public function testShouldMoveCubeForward()
	{
		$result = $this->cube->move('forward');
		$expectedFront  = [['w', 'w', 'w'], ['w', 'w', 'w'], ['w', 'w', 'w']];
		$expectedRight  = [['b', 'b', 'b'], ['b', 'b', 'b'], ['b', 'b', 'b']];
		$expectedBack   = [['y', 'y', 'y'], ['y', 'y', 'y'], ['y', 'y', 'y']];
		$expectedLeft   = [['r', 'r', 'r'], ['r', 'r', 'r'], ['r', 'r', 'r']];
		$expectedBottom = [['o', 'o', 'o'], ['o', 'o', 'o'], ['o', 'o', 'o']];
		$expectedTop    = [['g', 'g', 'g'], ['g', 'g', 'g'], ['g', 'g', 'g']];
		
		$this->assertEquals($expectedFront, $result['front']);
		$this->assertEquals($expectedRight, $result['right']);
		$this->assertEquals($expectedBack, $result['back']);
		$this->assertEquals($expectedLeft, $result['left']);
		$this->assertEquals($expectedTop, $result['top']);
		$this->assertEquals($expectedBottom, $result['bottom']);
	}

	public function testShouldMoveCubeBackward()
	{
		$result = $this->cube->move('backward');
		$expectedFront  = [['g', 'g', 'g'], ['g', 'g', 'g'], ['g', 'g', 'g']];
		$expectedRight  = [['b', 'b', 'b'], ['b', 'b', 'b'], ['b', 'b', 'b']];
		$expectedBack   = [['y', 'y', 'y'], ['y', 'y', 'y'], ['y', 'y', 'y']];
		$expectedLeft   = [['r', 'r', 'r'], ['r', 'r', 'r'], ['r', 'r', 'r']];
		$expectedBottom = [['o', 'o', 'o'], ['o', 'o', 'o'], ['o', 'o', 'o']];
		$expectedTop    = [['g', 'g', 'g'], ['g', 'g', 'g'], ['g', 'g', 'g']];
		
		$this->assertEquals($expectedFront, $result['front']);
		$this->assertEquals($expectedRight, $result['right']);
		$this->assertEquals($expectedBack, $result['back']);
		$this->assertEquals($expectedLeft, $result['left']);
		$this->assertEquals($expectedTop, $result['top']);
		$this->assertEquals($expectedBottom, $result['bottom']);
	}

}