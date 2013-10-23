<?php

class PrimeWords
{
    public function isPrime($word)
    {
       $number =  $this->getWordValue($word);

       return $this->isPrimeNumber($number);
    }

    private function getWordValue($word)
    {
        $return = 0;
        for($i = 0; $i < strlen($word); $i++){
            $number = ord($word[$i]);
            $number -= ($number > 90) ? 96 : 64-26;
            $return += $number;
        }
        return $return;
    }

    private function isPrimeNumber($number)
    {
        if($number == 1) {
            return false;
        }

        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }

        return true;
    }


}
