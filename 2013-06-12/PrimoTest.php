<?php

require_once("Primo.php");

class PrimoTest extends PHPUnit_Framework_TestCase {
	
	/**
	*
	* @dataProvider providerFatoresPrimos
	*/
	public function testFatoresPrimos($numero, $esperado) {
		$primo = new Primo();

		$resultado = $primo->fatoresPrimos($numero);

		$this->assertEquals($esperado, $resultado);
	}

	public static function providerFatoresPrimos()
	{
		return array(
			array(5, array(5)),
			array(6, array(2, 3)),
			array(9, array(3, 3)),
			array(15, array(3, 5)),
			array(52, array(2, 2, 13)),
			array(1747, array(1747)),
			array(179424673, array(179424673)),
		);
	}
}
