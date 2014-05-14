<?php

include 'TreeList.php';

class TreeListTest extends PHPUnit_Framework_TestCase
{
    public function testShouldCreateTreeWithRootOnly()
    {
        $tree = new TreeList(array(
            array('1', null, 'root')
        ));

        $expected = array(
            'id' => '1',
            'name' => 'root',
            'children' => array()
        );

        $this->assertEquals($expected, $tree->toArray());
    }

    public function testShouldCreateTreeWithRootAndOneSon()
    {
         $tree = new TreeList(array(
            array('1', null, 'root'),
            array('2', 1, 'son 1')
        ));

        $expected = array(
            'id' => '1',
            'name' => 'root',
            'children' => array(
                array(
                    'id' => '2',
                    'name' => 'son 1',
                    'children' => array()
                )
            )
        );

        $this->assertEquals($expected, $tree->toArray());
    }

    public function testShouldCreateTreeWithRootAndiTwoSon()
    {
         $tree = new TreeList(array(
            array('1', null, 'root'),
            array('2', 1, 'son 1'),
            array('3', 1, 'son 2'),
        ));

        $expected = array(
            'id' => '1',
            'name' => 'root',
            'children' => array(
                array(
                    'id' => '2',
                    'name' => 'son 1',
                    'children' => array()
                ),
                array(
                    'id' => '3',
                    'name' => 'son 2',
                    'children' => array()
                ),

            )
        );

        $this->assertEquals($expected, $tree->toArray());
    }

    public function testShouldCreateTreeWithRootAndOneSonAndGrandson()
    {
         $tree = new TreeList(array(
            array('1', null, 'root'),
            array('2', 1, 'son 1'),
            array('3', 2, 'grandson 1'),
        ));

        $expected = array(
            'id' => '1',
            'name' => 'root',
            'children' => array(
                array(
                    'id' => '2',
                    'name' => 'son 1',
                    'children' => array(
                        array(
                            'id' => '3',
                            'name' => 'grandson 1',
                            'children' => array()
                        ),
                    )
                ),
            )
        );

        $this->assertEquals($expected, $tree->toArray());
    }
   

}
