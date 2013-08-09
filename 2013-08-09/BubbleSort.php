<?php

class BubbleSort
{
    public static function sort($numbers)
    {
        if (count($numbers) < 2) {
            return $numbers;
        }

        $status = false;

        while(!$status) {
            $status = true;
            $i = 0; 
            while($i < count($numbers)-1) {
                if($numbers[$i] > $numbers[$i+1]) {
                    $status = false;
                    $aux = $numbers[$i];
                    $numbers[$i] = $numbers[$i+1];
                    $numbers[$i+1] = $aux; 
                }
                $i++;
            }
        }

        return $numbers;
    }
}
