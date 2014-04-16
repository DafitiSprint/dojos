<?php

class Hangman
{
    private $word;
    private $errors = 0;
    private $status = 0;
    private $tries = array();
    
    const WON = 1;
    const LOST = 2;

    public function __construct($word)
    {
        $this->word = $word;

        foreach (str_split($word) as $letter) {
            $this->tries[$letter] = false;
        }
    }

    public function guessLetter($letter)
    {
        $result = strpos($this->word, $letter) !== false;

        if($result) {
            $this->tries[$letter] = true;

            if (in_array(false, $this->tries)) {
                
            }
        } else { 
            $this->errors++;
        } 

        if($this->getErrors() == 6) {
            throw new Exception('GAME OVER');
        }


        return $result;
    } 

    public function getErrors()
    {
        return $this->errors;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
