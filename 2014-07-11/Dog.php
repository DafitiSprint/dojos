<?php

class Dog
{
    private $priority;

    public function __construct($priority)
    {
        $this->priority = $priority;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function chooseFavoritePerson($people)
    {
        foreach($this->priority as $lovedOne) {
            if (in_array($lovedOne, $people)){
                return $lovedOne;
            }
        }
        return 'Not Found';
    }
}
