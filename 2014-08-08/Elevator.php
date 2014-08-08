<?php

class Elevator
{
    private $floor;
    private $status;

    public function __construct ()
    {
        $this->floor = 0;
        $this->status = 'stopped';
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setFloor($floor)
    {
        $direction = $floor - $this->floor;
        if ($direction > 0) {
            $this->goUp($floor);
        }

        $this->floor = $floor;        
    }

    public function getFloor()
    {
        return $this->floor;
    }

    private function goUp($floor)
    {
        $this->status = 'movingUp';

    }
}
