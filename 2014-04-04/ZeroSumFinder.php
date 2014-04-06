<?php

class ZeroSumFinder
{
    /**
     * @var array $values
     */
    private $values;

    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function getResult()
    {
        $result = array();

        for ($i = 0; $i < count($this->values); $i++) {
            for ($j = 0; $j < count($this->values); $j++) {
                if (array_sum(array_slice($this->values, $i, $j)) == 0) {
                    $result[] = [$j, $i];
                }
            }
        }
        var_dump($result);

        return $result;
    }
}

