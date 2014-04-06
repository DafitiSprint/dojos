<?php
include_once 'Decorator.php';

class Lemon extends Decorator
{
    public function getIngredients()
    {
        return array_merge($this->drink->getIngredients(), array("lemon"));
    }

    public function getPrice()
    {
        return $this->drink->getPrice() + 3;
    }

}