<?php
include_once 'Component.php';

class Vodka extends Component
{
    public function getIngredients()
    {
        return array("vodka");
    }

    public function getPrice()
    {
        return 10;
    }

}