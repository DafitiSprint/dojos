<?php

class String
{
    private $arrayIndex = 0;

    public static function explode($delimiter, $string)
    {
        $returnedArray = array();

        $tmpStr = '';
        for($index = 0; $index < strlen($string); $index++){
            if ($string[$index] != $delimiter) {
                $returnedArray[$this->arrayIndex] = "";
                $returnedArray[$this->arrayIndex] .= $tmpStr;
            } else {
                $returnedArray[] = ""; 
                $tmpStr = "";
                $this->arrayIndex = count($returnedArray);
            }
        }

        return $returnedArray;
    }
}
