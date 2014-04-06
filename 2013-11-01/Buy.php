<?php

class Buy
{
    private $value;

    protected $billsAndCoins = array(100,50,20,10,5,1);


    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getBuy($paidPrice)
    {
        $change = $paidPrice - $this->getValue();

        if($change == 0){
            return array();
        }

        return $this->getBills($change);
    }

    private function getBills($change)
    {
        $result = array();
        while($change != 0) {
            foreach ($this->billsAndCoins as $money) {
                if($change >= $money) {
                    if(!isset($result[$money])) {
                        $result[$money] = 0;
                    }
                    $result[$money] += 1;
                    $change -= $money;
                }
            }
        }

        return $result;
    }
}
