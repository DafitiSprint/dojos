<?php

class StateFour extends StateAbstract
{
    /**
     * @return StateAbstract|StateTwo
     */
    public function moveUp()
    {
        echo self::MOVING_UP;
        return new StateTwo();
    }

    /**
     * @return $this|StateAbstract
     */
    public function moveDown()
    {
        echo self::ERROR_DOWN;
        return $this;
    }

    /**
     * @return StateAbstract|StateThree
     */
    public function moveLeft()
    {
        echo self::MOVING_LEFT;
        return new StateThree();
    }

    /**
     * @return $this|StateAbstract
     */
    public function moveRight()
    {
        echo self::ERROR_RIGHT;
        return $this;
    }
}