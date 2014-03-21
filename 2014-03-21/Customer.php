<?php   

require "Person.php";

class Customer implements Person 
{
    private $age;

    public function __construct($age)
    {
        if (!is_int($age)) {
            throw new InvalidArgumentException('Invalid Age');
        }
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }


}
