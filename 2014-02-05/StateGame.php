<?php

class StateGame 
{
    private $position = array(0, 0);

    public function getCurrentPosition() 
    {
        return $this->position; 
    }

    public function setPosition(array $position)
    {
        if($position === array(1,1)) {
            return false;
        }
        $this->position = $position;
    }

    public function moveRight() {
        $position = $this->getCurrentPosition();
        $position[1]++;
        return true;
    }

    
}
