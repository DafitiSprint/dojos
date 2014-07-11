<?php

class JoKenPo
{
    const PAPER = 1;
    const ROCK = 2;
    const SCISSORS = 4;

    private $player1;
    private $player2;
    private $winner = [0=>'draw', 3=>'paper', 5=>'scissors', 6=>'rock'];

    public function __construct($player1, $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function getWinner()
    {
        return $this->winner[$this->player1 ^ $this->player2];
    }
}
