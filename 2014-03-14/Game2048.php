<?php

class Game2048 {

    private $matrix = [
        [0,0,0,0],
        [0,0,0,0],
        [0,0,0,0],
        [0,0,0,0],
    ];    

    public function getState()
    {
        return $this->matrix;
    }

    public function start()
    {
        $this->matrix = [
            [0,0,0,0],
            [0,2,0,0],
            [0,0,2,0],
            [0,0,0,0],
        ];
    }

    public function getSum()
    {
        $result = 0;
        foreach ($this->matrix as $line) {
            $result += array_sum($line);
        }

        return $result;
    }

    public function getRandomPosition()
    {
        return [mt_rand(0,3), mt_rand(0,3)];
    }

}
