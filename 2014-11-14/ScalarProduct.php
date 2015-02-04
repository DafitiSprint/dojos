<?php
class ScalarProduct
{
    protected $a;
    protected $b;

    public function __construct($a,$b) {
        $this->a = $a;
        $this->b = $b;    
        $this->validateInputs();
    }

    public function get() {
        $len = count($this->a);
        $result = 0;
        for($i = 0; $i < $len ; $i++){
            $result +=  $this->a[$i] * $this->b[$i];
        }
        return $result; 
    }

    private function validateInputs()
    {
        if (count($this->a) != count($this->b)) {
            throw new InvalidArgumentException();
        }
    }
}
