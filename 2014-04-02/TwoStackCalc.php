<?php

class TwoStackCalc
{
    private $expression;
    private $valueStack;
    private $operatorStack;

    public function __construct($expression)
    {
        $this->expression = $this->formatExpression($expression);
        $this->validateExpression();

        $this->valueStack = new SplStack();
        $this->operatorStack = new SplStack();
    }

    private function formatExpression($expression)
    {
        return str_replace(" ", "", $expression);
    }

    private function validateExpression()
    {
        $nrOpenParenthesis = substr_count($this->expression, '(');
        $nrCloseParenthesis = substr_count($this->expression, ')');
        
        if ($nrOpenParenthesis != $nrCloseParenthesis) {
          throw new Exception();
        }

        if (preg_match("/[+*]\)/", $this->expression)) {
            throw new Exception();
        }
    }

    public function getExpression()
    {
        return $this->expression;
    }
    
    public function calculate()
    {
        for ($i = 0; strlen($this->expression); $i++) {
            if ($this->expression[$i] === '(') {
                continue;
            }

            if (is_numeric($this->expression[$i])) {
                $this->valueStack->push($this->expression[$i]);
            }

            if (in_array($this->expression[$i], array('+', '*')) {
                $this->operatorStack->push($this->expression[$i]); 
            }
            
            if ($this->expression[$i] === ')') {
                $num1 = $this->valueStack->pop();
                $num2 = $this->valueStack->pop();
                $op = $this->operatorStack->pop();

                $this->valueStack->push(eval("return $num1 $op $num2;"));
            }
        }

        return $this->valueStack->pop();
    }
}
