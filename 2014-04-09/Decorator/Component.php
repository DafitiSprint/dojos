<?php

abstract class Component
{
    /** @var Component */
    protected $drink;
    abstract public function getIngredients();
    abstract public function getPrice();
}