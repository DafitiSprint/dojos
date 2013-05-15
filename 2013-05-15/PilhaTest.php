<?php 

include "Pilha.php";

class PilhaTest extends PHPUnit_Framework_TestCase
{
	public function testVazia()
	{
		$pilha = new Pilha();
		$this->assertEquals(-1, $pilha->vazia());	
	}

	public function testPush()
	{
		$expected = array(0 => 51, 1 => 32);
		$testPilha = new Pilha();
		$testPilha->push(51);
		$testPilha->push(32);
		$this->assertEquals( $expected , testPilha->pilha );		
	}

	public function testPop()
	{
		$pilha = new Pilha();
		$pilha->push(3);
		$pilha->push(47);

		$this->assertEquals(3, $pilha->pop());
	}

	public function testPeek()
	{
		$pilha = new Pilha();
		$pilha->push(10);
		$pilha->push(12);

		$this->assertEquals(1, $pilha->peek());	
	}
}