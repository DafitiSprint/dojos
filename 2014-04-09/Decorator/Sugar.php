<?php
include_once 'Decorator.php';

class Sugar extends Decorator
{
    public function getIngredients()
    {
        return array_merge($this->drink->getIngredients(), array("sugar"));
    }

    public function getPrice()
    {
        return $this->drink->getPrice() + 0.5;
    }

}