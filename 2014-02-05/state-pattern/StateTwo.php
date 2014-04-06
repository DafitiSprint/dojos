<?php

class StateTwo extends StateAbstract
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
     * @return StateAbstract|StateFour
     */
    public function moveDown()
    {
        echo self::MOVING_DOWN;
        return new StateFour();
    }

    /**
     * @return StateAbstract|StateOne
     */
    public function moveLeft()
    {
        echo self::MOVING_LEFT;
        return new StateOne();
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