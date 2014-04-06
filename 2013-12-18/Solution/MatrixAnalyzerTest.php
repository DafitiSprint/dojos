<?php
require_once 'Matrix.php';
require_once 'MatrixAnalyzer.php';

class MatrixAnalyzerTest extends PHPUnit_Framework_TestCase
{
    public function testShouldReturnOne(){
    	$matrix = new Matrix();
    	$matrix->setSize(5);
    	$matrix->setValues(array(1,1,1,1,1,2,2,2,2,2,3,3,3,3,3,4,4,4,4,4,5,5,5,5,5));

    	$analyzer = new MatrixAnalyzer();
    	$analyzer->getGreaterProduct($matrix);
    }
}
