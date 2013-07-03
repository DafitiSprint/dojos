<?php

class Jokenpo 
{

	const PAPER = 'paper';
	const STONE = 'stone';
	const SCISSORS = 'scissors';
	const DRAW = 'draw';

	private static $roles = array(
		self::PAPER => self::STONE,
		self::STONE => self::SCISSORS,
		self::SCISSORS => self::PAPER
	);

	public function result($player1, $player2)
	{		
		if ($player1 == $player2) {
			return self::DRAW;
		}
		return $this->checkWinner($player1, $player2);
	}

	public function checkWinner($player1, $player2)
	{
		if (self::$roles[$player1] == $player2) {
			return $player1;
		}
		return $player2;		
	}
}