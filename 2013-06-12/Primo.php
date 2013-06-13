<?php

class Primo
{

    const ITERADOR_INICIAL = 2;

    /**
     * @var int
     */
    private $inicial;

    /**
     * @var int
     */
    private $valor;

    /**
     * @var bool
     */
    private $numeroPrimo;

    /**
     * @var array
     */
    private $fatores = array();

    public function __construct()
    {
        $this->inicial = self::ITERADOR_INICIAL;
        $this->numeroPrimo = false;
    }

    /**
     * @param $valor
     * @return array
     */
    public function fatoresPrimos($valor) 
    {
        $this->valor = $valor;
        while ($this->valor != 1 && !$this->numeroPrimo) {
            $this->defineProximoIterador();
            $this->numeroPrimo = $this->aplicaRegraPrimo();
        }
        return $this->fatores;
    }

    private function aplicaRegraPrimo()
    {
        if ($this->precisaContinuar($this->inicial, $this->valor)) {
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
    private function precisaContinuar($iterador, $valor)
    {
        return (($iterador * $iterador) > $valor);
    }

    private function defineProximoIterador()
    {
        if (!$this->adicionaFator()) {
            $this->inicial++;
        }
    }

    /**
     * @return bool
     */
    private function adicionaFator()
    {
        if ($this->divisivel($this->valor, $this->inicial)) {
            $this->valor = $this->valor / $this->inicial;
            $this->fatores[] = $this->inicial;
            return true;
        }
        return false;
    }

    /**
     * @param $valor
     * @param $divisor
     * @return bool
     */
    private function divisivel($valor, $divisor)
    {
        return ($valor % $divisor == 0);
    }
}
