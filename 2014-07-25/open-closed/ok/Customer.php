<?php

class Customer
{
    private $evaluations = array();

    public function isSpecialCustomer(
    {
        foreach($this->evaluations as $evaluation) {
            if(!$evaluation->isValid()) {
                return false;
            }
        }

        return true;
    }
}
