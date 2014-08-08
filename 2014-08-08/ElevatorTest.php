<?php 

include 'Elevator.php';

class ElevatorTest extends PHPUnit_Framework_TestCase 
{
    public function testShouldRetriveDefaultFloor()
    {
        $elevator = new Elevator();

        $this->assertEquals(0, $elevator->getFloor());
    }

    public function testElevatorStatusShouldBeStopped()
    {
        $elevator = new Elevator();

        $result = $elevator->getStatus();

        $this->assertEquals('stopped', $result);
    }

    public function testElevatorShouldSetAndGetFloor()
    {
        $elevator = new Elevator();

        $floor = 10;

        $elevator->setFloor($floor);
        $this->assertEquals($floor, $elevator->getFloor());
    }

    public function testElevatorStatusShouldBeGoingUp()
    {
        $elevator = new Elevator();
        $elevator->setFloor(10);

        $expected = 'moving';

        $this->assertEquals($expected, $elevator->getStatus());
    }
}    
    
