<?php
require "ScalarProduct.php";
class ScalarProductTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider dataProvider
     */
    public function testShouldReturnScalarProducts($expected, $a, $b)
    {
        $scalarProduct = new ScalarProduct($a, $b);
        $result = $scalarProduct->get();
        $this->assertEquals($expected, $result);
    }

    public function dataProvider()
    {
        return [
            [1, [1],[1]],
            [25, [5],[5]],
            [26, [1,5],[1,5]]
        ];
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testShouldErrorWhen1_5x5()
    {
        $a = [1, 5];
        $b = [5];

        $scalarProduct = new ScalarProduct($a, $b);
        $result = $scalarProduct->get();
    }


}
