<?php

class BibliographicName
{
    /**
     * @var string
     */
    public $parsedName = "";

    public static $inheritedNames = array(
        "Filho", "Filha", "Neto", "Neta", "Sobrinho", "Sobrinha", "Junior"
    );

    public static $lowerCase = array(
        "De", "Da", "Das", "Do", "Dos"
    );

    public function parse($name)
    {
        $name = ucwords($name);
        $nameParts = explode(' ', $name);

        $surname = $nameParts[count($nameParts)-1];
        array_pop($nameParts);

        if (in_array($surname, self::$inheritedNames)) {
            $surname = $nameParts[count($nameParts)-1] . " " . $surname;
            array_pop($nameParts);
        }

        $surname = strtoupper($surname) . ",";
        array_unshift($nameParts, $surname);

        foreach ($nameParts as $key => $namePart) {
            if (in_array($namePart, self::$lowerCase)) {
                $nameParts[$key] = strtolower($namePart);
            }
        }

        return implode(' ', $nameParts);
    }
}