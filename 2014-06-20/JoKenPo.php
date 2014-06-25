<?php

class JoKenPo {
    private $player1;
    private $player2;
    private $whoWins = [
        'paper' => 'scissors',
        'rock' => 'paper',
        'scissors' => 'rock'
        ];
    private $winner;

    public function __construct($player1, $player2){
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function getWinner() {
        if (!$this->winner) {
            if ($this->player1 === $this->player2 ) {
                return 'draw';
            }
            $this->winner = $this->whoWins[$this->player1] === $this->player2 ? $this->player2 : $this->player1;
        }
        return $this->winner;
    } 

    
}
