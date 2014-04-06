<?php 

class CalcStatus
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;    
    }

    public function findMinValue()
    {
        if (!isset($this->data[1])) {
            return $this->data[0];
        }
        
        if ($this->data[0] > $this->data[1]) {
            return $this->data[1];
        } else {
            return $this->data[0];
        }

    }
}
