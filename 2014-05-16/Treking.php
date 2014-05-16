<?php 

class Treking 
{
    protected $points;

    public function __construct()
    {
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function addPoint($point)
    {
        $this->points[] = $point;
    }

    public function getDistance($point1, $point2)
    {
        $deltaX = pow(($point2[1]-$point1[1]), 2);
        $deltaY = pow(($point2[2]-$point1[2]), 2);

        $distance = sqrt($deltaX + $deltaY);
              
        return $distance;
    }
}
