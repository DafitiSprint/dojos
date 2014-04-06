<?php
require "UnionFind.php";
class UnionFindTest extends PHPUnit_Framework_TestCase
{
    public function testConstructorShouldInitializePoints() {
        $unionFind = new UnionFind(1);
        $this->assertInstanceOf('UnionFind', $unionFind);
        $this->assertEquals(1, $unionFind->getNumberOfPoints());
    }

    /**
     * @dataProvider getExceptionDataProvider
     * @expectedException Exception
     */
    public function testShouldThrowExceptionWithInvalidArguments($p1, $p2)
    {
        $unionFind = new UnionFind(5);
        $unionFind->union($p1, $p2);
    } 

    public function getExceptionDataProvider()
    {
        return array(
            array(1, 10),
            array(10, 1),
        );
    }

    public function test

}
