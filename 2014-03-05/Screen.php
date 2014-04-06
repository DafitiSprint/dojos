<?php 

class Screen
{
    protected $input;
    private $lcdMapper = array(
        0 => array('._.',
                   '|.|',
                   '|_|'),
        1 => array('...',
                   '..|',
                   '..|'),
    );

    public function __construct($input)
    {
        if (false == is_integer($input)) {
            throw new InvalidArgumentException('$input value is not allowed');
        }

        $this->input = $input;
    }

    public function convert()
    {
        return 
           $this->lcdMapper[$this->input]           
        ;
    } 
}
