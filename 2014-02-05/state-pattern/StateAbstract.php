<?php

abstract class StateAbstract {
    const ERROR_UP = "Voce nao pode se mover para cima\n";
    const ERROR_DOWN = "Voce nao pode se mover para baixo\n";
    const ERROR_RIGHT = "Voce nao pode se mover para a direita\n";
    const ERROR_LEFT = "Voce nao pode se mover para a esquerda\n";

    const MOVING_UP = "Movendo para cima\n";
    const MOVING_DOWN = "Movendo para baixo\n";
    const MOVING_RIGHT = "Movendo para a direita\n";
    const MOVING_LEFT = "Movendo para a esquerda\n";

    /** @return StateAbstract */
    abstract public function moveUp();
    /** @return StateAbstract */
    abstract public function moveDown();
    /** @return StateAbstract */
    abstract public function moveLeft();
    /** @return StateAbstract */
    abstract public function moveRight();
} 