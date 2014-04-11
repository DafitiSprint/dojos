<?php

class Mines
{
    private $field;

    public function __construct($rows, $cols)
    {
        $this->field = array();

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $this->field[$i][$j] = 0;
            }
        }
    }

    public function addMine($row, $col)
    {
        $this->field[$row][$col] = '*';

        if (isset($this->field[$row-1][$col-1])) {
            $this->field[$row-1][$col-1]++;            
        }
    }

    public function getSolution()
    {
        return $this->field;
    }
}
