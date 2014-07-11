<?php

class String
{
    public static function strtoupper($string)
    {
        for ($i = 0; $i < strlen($string); $i++) {
            $letter = $string[$i] ^ ' ';

            if ($letter < $string[$i]) {
                $string[$i] = $letter;
            }
        }

        return $string;
    }

    public static function strtolower($string)
    {
        for ($i = 0; $i < strlen($string); $i++) {
            $string[$i] = $string[$i] | ' ';
        }

        return $string;
    }

    public static function ucfirst($string)
    {
        for ($i = 0; $i < strlen($string); $i++) {
            if (0 === $i) {
                $letter = $string[$i] ^ ' ';

                if ($letter < $string[$i]) {
                    $string[$i] = $letter;
                }
            } else {
                $string[$i] = $string[$i] | ' ';
            }
        }

        return $string;
    }

    public static function ucwords($string)
    {
        for ($i = 0; $i < strlen($string); $i++) {
            if (!$i || !trim($string[$i-1])) {
                $letter = $string[$i] ^ ' ';

                if ($letter < $string[$i]) {
                    $string[$i] = $letter;
                }
            } else {
                $string[$i] = $string[$i] | ' ';
            }
        }

        return $string;
    }

    public static function substr($string, $start)
    {
        $stringSize = strlen($string);

        //verify if exists third parameter
        if (3 == func_num_args()) {
            $length = func_get_arg(2);

            if (0 === $length || false === $length || null === $length) {
                return '';
            }
        }

        //convert string to hexadecimal
        $hexadecimal = unpack('H*', $string);
        //convert hexadecimal to decimal
        $decimal = base_convert($hexadecimal[1], 16, 10);

        if ($start > 0) {
            //when positive, get some bits from right to left (each character has 8 bits or 1 byte)
            $decimal = $decimal & (pow(2, ($stringSize * 8 - ($start * 8))) - 1);
        }

        if ($start < 0) {
            //when negative get exactly the number of bits by start number, from right to left too
            $decimal = $decimal & (pow(2, $start * -8) - 1);
        }

        if (isset($length)) {
            if ($length > 0) {
                if ($start < 0) {
                    $start *= -1;
                }

                $stringSize -= $start;
                $length = $length < 0 ? $length * -1 : $length;
                //exclude bits from right
                $decimal = $decimal >> (8 * ($stringSize - $length));
            }

            if ($length < 0) {
                //exclude bits from right
                $decimal = $decimal >> (8 * ($length * -1));
            }
        }

        return $decimal ? pack('H*', base_convert($decimal, 10, 16)) : false;
    }
}
