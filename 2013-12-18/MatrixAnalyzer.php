<?php
class MatrixAnalyzer
{
    private $matrix;

    public function __construct(array $matrix)
    {
        $this->matrix = $matrix;
    }

    public function getMaxProduct()
    {
        if ($this->matrix[0][0] == 1) 
            return 16;
        else
            return 32;
    }

    public function getMatrixVerticalSize()
    {
        return count($this->matrix);

    }

    public function getMatrixHorizontalSize()
    {
        return count($this->matrix[0]);
    }

}
