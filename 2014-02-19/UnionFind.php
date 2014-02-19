<?php


class UnionFind 
{
    private $numberOfPoints;
    private $points = array();

    function __construct($numberOfPoints)
    {
        $this->numberOfPoints = $numberOfPoints;
    }

    public function getNumberOfPoints()
    {
        return $this->numberOfPoints;
    }

    public function union($p1, $p2) 
    {
        if(!$this->pointExists($p1) || !$this->pointExists($p2)) {
            throw new Exception('Point does not exists');
        }

        $this->points[$p1][$p2] = '';
        $this->points[$p2][$p1] = '';
    }

    public function pointExists($p)
    {
        return ($this->numberOfPoints >= $p);
    }

    public function isConnected() {

    }
}
