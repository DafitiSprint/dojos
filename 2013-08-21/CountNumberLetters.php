<?php
class CountNumberLetters
{
    private static $extense = array(
        '1' => 'um',
        '2' => 'dois',
        '3' => 'tres',
        '4' => 'quatro'
    );

    public static function count($number)
    {
        return strlen(self::_extenseNumber($number));
    }

    private static function _extenseNumber($number)
    {
        return self::$extense[$number];
    }
}
