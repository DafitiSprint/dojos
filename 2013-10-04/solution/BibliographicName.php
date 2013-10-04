<?php

class BibliographicName
{
    /**
     * @var array
     */
    private $nameParts = array();

    public static $inheritedNames = array(
        "Filho", "Filha", "Neto", "Neta", "Sobrinho", "Sobrinha", "Junior"
    );

    public static $lowerCase = array(
        "De", "Da", "Das", "Do", "Dos"
    );

    public function parse($name)
    {
        $this->setNameParts($name);
        $surname = $this->getSurname();
        $surname = $this->parseInheritedNames($surname);

        $this->appendSurnameToUpper($surname);
        $this->parseLowerCaseParts();
        return implode(' ', $this->nameParts);
    }

    private function setNameParts($name)
    {
        $name = ucwords($name);
        $this->nameParts = explode(' ', $name);

        return $this->nameParts;
    }

    private function getSurname()
    {
        $surname = $this->nameParts[count($this->nameParts)-1];
        array_pop($this->nameParts);

        return $surname;
    }

    private function parseInheritedNames($surname)
    {
        $returnedSurname = $surname;

        if (in_array($surname, self::$inheritedNames)) {
            $returnedSurname = $this->nameParts[count($this->nameParts)-1] . " " . $surname;
            array_pop($this->nameParts);
        }

        return $returnedSurname;
    }

    private function appendSurnameToUpper($surname)
    {
        $surnameUpper = strtoupper($surname) . ",";
        array_unshift($this->nameParts, $surnameUpper);
    }

    private function parseLowerCaseParts()
    {
        foreach ($this->nameParts as $key => $namePart) {
            if (in_array($namePart, self::$lowerCase)) {
                $this->nameParts[$key] = strtolower($namePart);
            }
        }
    }
}