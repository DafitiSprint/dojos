<?php
include_once 'Vodka.php';
include_once 'Lemon.php';
include_once 'Sugar.php';

class Caipiroska
{
    public function wrapComponents()
    {
        $drink = new Vodka();
        $drink = new Lemon($drink);
        $drink = new Sugar($drink);

        return $drink;
    }
}