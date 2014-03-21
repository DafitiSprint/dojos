<?php

require('Customer.php');

class CustomerTest extends PHPUnit_Framework_TestCase
{
    public function providerAges()
    {
        return array(
            array(
                'age' => 18
            ),
            array(
                'age' => 20
            )
        );
    }

    /**
     * @dataProvider providerAges
     */
    public function testGetAge($age)
    {
        $customer = new Customer($age);
        $this->assertInternalType('integer', $customer->getAge());
        $this->assertEquals($age, $customer->getAge());   
    }
    /**
     * @expectedException InvalidArgumentException
     */
    public function testConstructorShouldThrowInvalidArgumentException()
    {
       $customer = new Customer("18");
    }

    public function testShouldReturnTheGender()
    {
        $customer = new Customer($age=18, $gender=2);
        $this->assert();
    }

}
