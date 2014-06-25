<?php

class Strings
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function ucfirst()
    {
        if(empty($this->string)) {
            return $this->string;
        }
        
        $first = ord($this->string[0]);

        if ($first > 96) {
            $first-=32; 
        }

        $this->string[0] = chr($first);
        return $this->string;
    }

    public function ucwords()
    {
        $words = explode(' ', $this->string);

        $newWord = [];

        foreach ($words as $word) {
            $this->string = $word;
            $newWord[] = $this->ucfirst();
        }

        $this->string = implode(' ', $newWord);

        return $this->string;


    }

    public function strtoupper()
    {
        $l = str_split($this->string);
        foreach($l as &$letter) {
            $letter = ord($letter);
            
            if ($letter > 96) {
                $letter -= 32; 
            }
  
            $letter = chr($letter);
        }
        $this->string = implode('', $l);
        return $this->string;
    }

}
