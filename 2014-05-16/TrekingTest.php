<?php 

require 'Treking.php';

class TrekingTest extends PHPUnit_Framework_TestCase
{
    public function testShouldFeedTrekingPoint()
    {
        $point1 = ['Pico do Jaraguá', -90.000, 35.0000];
        $point2 = ['Pico do Bonilha', -90.200, 35.0100];

        $expected = [$point1, $point2];

        $treking = new Treking();

        $treking->addPoint($point1);
        $treking->addPoint($point2);

        $this->assertEquals($expected, $treking->getPoints());
    }

    public function testShouldCalculateDistanceBetweenTwoPoints()
    {
        $point1 = ['Pico do Jaraguá', 0, 0];
        $point2 = ['Pico do Bonilha', 3, 4];

        $distance = 5;

        $treking = new Treking();

        $this->assertEquals($distance, $treking->getDistance($point1, $point2));
    }

    public function testShouldGetNearestPoint()
    {
        $point1 = ['Pico do Jaraguá', 0, 0];
        $point2 = ['Pico do Bonilha', 3, 4];
        $point3 = ['Pedra grande', 4, 9];
        $point4 = ['Pedra do Baú', 1, 1];

        $treking = new Treking();
        $treking->addPoint($point1);
        $treking->addPoint($point2);
        $treking->addPoint($point3);

        $treking->setDestination($point4);

        $this->assertEquals($point4, $treking->getNearestPoint());
    }
}
