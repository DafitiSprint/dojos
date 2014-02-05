<?php

class StateOne extends StateAbstract
{
    /**
     * @return $this|StateAbstract
     */
    public function moveUp()
    {
        echo self::ERROR_UP;
        return $this;
    }

    /**
     * @return StateAbstract|StateThree
     */
    public function moveDown()
    {
        echo self::MOVING_DOWN;
        return new StateThree();
    }

    /**
     * @return $this|StateAbstract
     */
    public function moveLeft()
    {
        echo self::ERROR_LEFT;
        return $this;
    }

    /**
     * @return StateAbstract|StateTwo
     */
    public function moveRight()
    {
        echo self::MOVING_RIGHT;
        return new StateTwo();
    }
}