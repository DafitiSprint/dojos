<?php
include_once 'Dog.php';

class DogTest extends PHPUnit_Framework_TestCase
{
    public function testShouldConstructDog()
    {
        $priority = array(
            'Fernando',
            'Kravitz'
        );
        $dog = new Dog($priority);
        $result = $dog->getPriority();

        $this->assertEquals($priority, $result);

    }

    public function testShouldConstructDogWithAnotherPriority()
    {
        $priority = array(
            'Vitor',
            'Fernando'
        );

        $dog = new Dog($priority);
        $result = $dog->getPriority();

        $this->assertEquals($priority, $result); 
    }

    public function testShouldChooseFavoritePersonAsEvaldo()
    {
        $priority = array(
            'Vitor',
            'Fernando',
            'Evaldo',
            'Tagliati',
        );

        $dog = new Dog($priority);

        $availablePeople = array(
            'Evaldo',
            'Tagliati',
        );

        $result = $dog->chooseFavoritePerson($availablePeople);
        $expect = "Evaldo";

        $this->assertEquals($expect, $result);
    }

    public function testShouldChooseFavoritePersonAsBalsamao()
    {

        $priority = array(
            'Balsamao',
            'Fernando',
            'Evaldo',
            'Tagliati',
        );

        $dog = new Dog($priority);

        $availablePeople = array(
            'Evaldo',
            'Tagliati',
            'Balsamao',
        );

        $result = $dog->chooseFavoritePerson($availablePeople);
        $expect = "Balsamao";

        $this->assertEquals($expect, $result);
    }

    public function testShouldChooseFavoritePersonAsNoOne()
    {

        $priority = array(
            'Balsamao',
            'Fernando',
            'Evaldo',
            'Tagliati',
        );

        $dog = new Dog($priority);

        $availablePeople = array(
            'Uchiyama'
        );

        $result = $dog->chooseFavoritePerson($availablePeople);
        $expect = "Not Found";

        $this->assertEquals($expect, $result);
    }
   
    public function testShouldChooseOnlyTheFavorite()
    {

        $priority = array(
            'Balsamao',
            'Fernando',
            'Evaldo',
            'Tagliati',
        );

        $dog = new Dog($priority);

        $availablePeople = array(
            'Fernando',
            'Balsamao'
        );

        $result = $dog->chooseFavoritePerson($availablePeople);
        $expect = "Not Found";

        $this->assertEquals($expect, $result);
    }

}
