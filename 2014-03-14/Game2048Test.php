<?php

require 'Game2048.php';

Class Game2048Test extends PHPUnit_Framework_TestCase
{
    public function testGenerateMatrix()
    {
        $game2048 = new Game2048();

        $expected = [
            [0,0,0,0],
            [0,0,0,0],
            [0,0,0,0],
            [0,0,0,0],
        ];    

        $result = $game2048->getState();

        $this->assertEquals($expected, $result);
    }

    public function testStartGame()
    {
        $game = new Game2048();
        $game->start();

        $expected = 4;

        $result = $game->getSum();

        $this->assertEquals($expected, $result);
    }

    public function testGenerateRandomPosition()
    {
        $game = new Game2048();
        $result   = $game->getRandomPosition();
        $expected = 2;
        $this->assertInternalType('array',$result);
        $this->assertCount($expected,$result);
    }

    public function testShouldPopulateMatrix()
    {
        $game = new $this->getMockBuilder('Game2048')
            ->setMethods('populate')
            ->getMock();

        $game->expects($this->exactly(1))
            ->method('populate')
            ->


        $game->start();
        $matrix = $game->getState();
        $game

        
        $this->assertEquals(2,  );
    }

}
