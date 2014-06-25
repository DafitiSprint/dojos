<?php

require "JoKenPo.php";

class JoKenPoTest extends PHPUnit_Framework_TestCase
{
    public function testScissorsBeatsPaper()
    {
        $game = new JoKenPo('paper', 'scissors');
        $this->assertEquals('scissors', $game->getWinner());
    }

    public function testPaperBeatsRock(){
        $game = new JoKenPo('paper', 'rock');
        $this->assertEquals('paper', $game->getWinner()); 
    }

    public function testRockBeatsScissors()
    {
        $game = new JokenPo('rock', 'scissors');
        $this->assertEquals('rock', $game->getWinner());
    }

    public function testScissorsLoseRock()
    {
        $game = new JokenPo('scissors', 'rock');
        $this->assertEquals('scissors',$game->getWinner());
    }

    public function testRockEqualsRock()
    {
        $game = new JoKenPo('rock', 'rock');
        $this->assertEquals('draw', $game->getWinner());
    }
}
