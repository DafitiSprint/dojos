<?php
include_once 'Component.php';

abstract class Decorator extends Component
{
    function __construct(Component $drink)
    {
        $this->drink = $drink;
    }
}