<?php
require_once('Jokenpo.php');

class JokenpoTest extends PHPUnit_Framework_TestCase {

	

	public function jokenpoProvider(){
		return array(
			array( 'paper', 'scissors', 'scissors'),
			array( 'paper', 'stone', 'paper'),
			array( 'paper', 'paper', 'draw'),
			array( 'scissors', 'paper', 'scissors'),
			array( 'scissors', 'stone', 'stone'),
			array( 'scissors', 'scissors', 'draw'),
			array( 'stone', 'paper', 'paper'),
			array( 'stone', 'scissors', 'stone'),
			array( 'stone', 'stone', 'draw')
		);
	}

	/**
	 * @dataProvider jokenpoProvider
	*/
	public function testJokenpo($player1, $player2, $expected) 
	{
		$jokenpo = new Jokenpo();
		$return = $jokenpo->result($player1, $player2);

		$this->assertEquals( $expected, $return);
	}
}