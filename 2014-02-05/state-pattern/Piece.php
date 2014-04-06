<?php

class Piece extends StateAbstract
{
    private $state;

    function __construct(StateAbstract $state)
    {
        $this->state = $state;
    }

    public function moveUp()
    {
        $result = $this->state->moveUp();
        $this->state = $result;
    }

    public function moveDown()
    {
        $result = $this->state->moveDown();
        $this->state = $result;
    }

    public function moveLeft()
    {
        $result = $this->state->moveLeft();
        $this->state = $result;
    }

    public function moveRight()
    {
        $result = $this->state->moveRight();
        $this->state = $result;
    }
}