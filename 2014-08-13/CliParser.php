<?php

class CliParser
{
    private $options;
    private $input;

    public function setOptions($options)
    {
        $this->options = $options;
    }

    public function setInput($input) 
    {
        $this->input = explode(" ", $input);
    }

    public function has($input)
    {
        return in_array($input, $this->input);
    } 

    public function value($argument)
    {
        $position = array_search($argument, $this->input);
        return $this->input[$position + 1];
    }
}
