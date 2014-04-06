<?php

require('StateGame.php');

class StateGameTest extends PHPUnit_Framework_TestCase 
{
    public function testShouldReturnCurrentPositionWhenIs0x0()
    {
        $stateGame = new StateGame;
        $result = $stateGame->getCurrentPosition();
        $expected = array(0, 0);

        $this->assertEquals($expected, $result);
    }

    public function testShouldReturnCurrentPositionWhenIs0x1()
    {
        $stateGame = new StateGame();
        $stateGame->setPosition(array(0,1));
        $result = $stateGame->getCurrentPosition();
        $expected = array(0, 1);

        $this->assertEquals($expected, $result);
    }

    public function testShouldReturnFalseWhenMoveTo1x1()
    {
        $stateGame = new StateGame();
        $result = $stateGame->setPosition(array(1,1));
        $this->assertFalse($result);
    }

    public function testShouldMoveRight()
    {
        $stateGame = new StateGame();
        $result = $stateGame->moveRight();
        $this->assertTrue($result);
    }

    public function testShouldNotMoveRightWhenAt0x1()
    {
        
    }
}
