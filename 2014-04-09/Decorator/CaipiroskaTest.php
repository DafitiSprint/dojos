<?php
include_once 'Caipiroska.php';

class CaipiroskaTest extends PHPUnit_Framework_TestCase
{
    public function testGetPrice()
    {
        $caipiroska = new Caipiroska();
        $result = $caipiroska->wrapComponents();

        $this->assertEquals(13.5, $result->getPrice());
    }

    public function testGetIngredients()
    {
        $caipiroska = new Caipiroska();
        $result = $caipiroska->wrapComponents();

        $expected = array(
            "vodka", "lemon", "sugar"
        );

        $this->assertEquals($expected, $result->getIngredients());
    }

    public function testGetName()
    {
        $caipiroska = new Caipiroska();
        $result = $caipiroska->wrapComponents();

        $expected = array(
            "vodka", "lemon", "sugar"
        );

        $this->assertEquals($expected, $result->getIngredients());
    }
}