<?php

class RomanNumber
{
    private $algarism;
    private $dict = array('I' => 1, 'V' => 5, 'X' => 10);

    public function __construct($algarism)
    {
        $this->algarism = $algarism;
    }

    public function getArabic()
    {
        $result = 0;

        if (strlen($this->algarism) > 1) {
            for ($i = 0; $i < strlen($this->algarism); $i++) {
                if ($this->dict[$this->algarism[1]] > $this->dict[$this->algarism[0]]) {
                    $result -= $this->dict[$this->algarism[$i]];
                } else {
                    $result += $this->dict[$this->algarism[$i]];
                }
            }
        } else {
            $result = $this->dict[$this->algarism];
        }

        return $result;
    }
}
