<?php

require 'JoKenPo.php';

class JoKenPoTest extends PHPUnit_Framework_TestCase
{
    public function testPaperBeatsRock()
    {
        $joKenPo = new JoKenPo(JoKenPo::PAPER, JoKenPo::ROCK);
        $this->assertEquals('paper', $joKenPo->getWinner());
    }

    public function testRockLosesPaper()
    {
        $joKenPo = new JoKenPo(JoKenPo::ROCK, JoKenPo::PAPER);
        $this->assertEquals('paper', $joKenPo->getWinner());
    }

    public function testPaperLosesScissors()
    {
        $joKenPo = new JoKenPo(JoKenPo::PAPER, JoKenPo::SCISSORS);
        $this->assertEquals('scissors', $joKenPo->getWinner());
    }

    public function testScissorBeatsPaper()
    {
        $joKenPo = new JoKenPo(JoKenPo::SCISSORS, JoKenPo::PAPER);
        $this->assertEquals('scissors', $joKenPo->getWinner());
    }

    public function testScissorsLosesRock()
    {
        $joKenPo = new JoKenPo(JoKenPo::SCISSORS, JoKenPo::ROCK);
        $this->assertEquals('rock', $joKenPo->getWinner());
    }

    public function testRockBeatsScissors()
    {
        $joKenPo = new JoKenPo(JoKenPo::ROCK, JoKenPo::SCISSORS);
        $this->assertEquals('rock', $joKenPo->getWinner());
    }

    public function testPaperEqualsPaperShouldReturnDraw()
    {
        $joKenPo = new JoKenPo(JoKenPo::PAPER, JoKenPo::PAPER);
        $this->assertEquals('draw', $joKenPo->getWinner());
    }
}
