<?php

class StateThree extends StateAbstract
{
    /**
     * @return StateAbstract|StateOne
     */
    public function moveUp()
    {
        echo self::MOVING_UP;
        return new StateOne();
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
     * @return $this|StateAbstract
     */
    public function moveLeft()
    {
        echo self::ERROR_LEFT;
        return $this;
    }

    /** @return StateAbstract */
    public function moveRight()
    {
        echo self::MOVING_RIGHT;
        return new StateFour();
    }
}