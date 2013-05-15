<?php

include "Operacoes.php";

class OperacoesTest extends PHPUnit_Framework_TestCase
{

	/**
	* @dataProvider providerCalcula
	*/
	public function testCalcula($expressao, $esperado)
	{
		$soma = Operacoes::calcula($expressao);
		$this->assertEquals($esperado, $soma);
	}

	public static function providerCalcula()
	{
		return array(
			array('2+2', 4),
			array('2+4', 6),
			array('8+8', 16),
			array('10+2',12),
			array('2+2+2',6),
			array('2-2',0),
		);
	}
}