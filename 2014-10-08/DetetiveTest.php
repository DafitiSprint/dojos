
<?php

include "Detetive.php";

class DetetiveTest extends PHPUnit_Framework_TestCase{
    

    public function testShouldReturnOnlyElement()
    {
        $expected = 1;
        $list = [1];

        $detetive = new Detetive($list);
        $this->assertEquals($expected, $detetive->search());
    }

    public function testShouldReturnNullIfInputIsEmptyArray()
    {    
        $expected = null;
        $detetive = new Detetive([]);
        $this->assertEquals($expected, $detetive->search());    
    }

    /**
     * @dataProvider providerSameLowestFrequency
     */
    public function testShouldReturnNullIfSameLowestFrequency($list)
    {
        $expected = null;

        $detetive = new Detetive($list);
        $this->assertEquals($expected, $detetive->search());
    }

    public static function providerSameLowestFrequency()
    {
        return [
            [[1,2]],
            [[1,1,2,3]],
            [[3,1,1,2,2,2,3,3,1]],
        ];
    }

    /**
     * @dataProvider providerLowestItem
     */
    public function testShouldReturnLowestItem($expected, $list)
    {
        $detetive = new Detetive($list);
        $this->assertEquals($expected, $detetive->search());
    }

    public static function providerLowestItem()
    {
        return [
            [1, [1,2,2]],
            [3, [4,1,4,2,2,1,3,7,9,7,9]],
            [2, [2,1,4,4,1,7,9,7,9]],

        ];
    }
}