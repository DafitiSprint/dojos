<?php

class Primo
{

    const START_ITERATOR = 2;

    /**
     * @var int
     */
    private $init;

    /**
     * @var int
     */
    private $valor;

    /**
     * @var bool
     */
    private $isDivisibleOnlyByIitself;

    /**
     * @var array
     */
    private $fatores = array();

    public function __construct()
    {
        $this->init = self::START_ITERATOR;
        $this->isDivisibleOnlyByIitself = false;
    }

    /**
     * @param $valor
     * @return array
     */
    public function getFatoresPrimos($valor) 
    {
        $this->valor = $valor;
        while ($this->valor != 1 && !$this->isDivisibleOnlyByIitself) {
            $this->defineNextIterator();
            $this->isDivisibleOnlyByIitself = $this->applyDivisibleOnlyByIitselfRule();
        }
        return $this->fatores;
    }

    private function applyDivisibleOnlyByIitselfRule()
    {
        if ($this->needToContinue($this->init, $this->valor)) {
            $this->fatores[] = $this->valor;
            return true;
        }
        return false;
    }

    /**
     * @param $iterator
     * @param $valor
     * @return bool
     */
    private function needToContinue($iterator, $valor)
    {
        return (($iterator * $iterator) > $valor);
    }

    private function defineNextIterator()
    {
        if (!$this->addFator()) {
            $this->init++;
        }
    }

    /**
     * @return bool
     */
    private function addFator()
    {
        if ($this->isDivible($this->valor, $this->init)) {
            $this->valor = $this->valor / $this->init;
            $this->fatores[] = $this->init;
            return true;
        }
        return false;
    }

    /**
     * @param $valor
     * @param $divisor
     * @return bool
     */
    private function isDivible($valor, $divisor)
    {
        return ($valor % $divisor == 0);
    }
}
