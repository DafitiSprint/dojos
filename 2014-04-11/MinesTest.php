<?php

require 'Mines.php';

class MinesTest extends PHPUnit_Framework_TestCase
{
    public function test2x2FieldWith1MineOn0x0()
    {
        $mines = new Mines(2, 2);

        $mines->addMine(0, 0);

        $map = $mines->getSolution();

        $this->assertEquals(array(
            array('*', 1),
            array(1, 1)
        ), $map);
    }
    
    public function test2x2FieldWith1MineOn1x0()
    {
        $mines = new Mines(2, 2);

        $mines->addMine(1, 0);

        $map = $mines->getSolution();

        $this->assertEquals(array(
            array(1, 1),
            array('*', 1)
        ), $map);
    }

    public function test2x2fieldWith2Mines() 
    {
        $mines = new Mines(2,2);

        $mines->addMine(0,0);
        $mines->addMine(1,1);

        $map=$mines->getSolution();

        $this->assertEquals(array(
            array('*',2),
            array(2,'*')
        ), $map);
    }
}
