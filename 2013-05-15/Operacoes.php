<?php

class Operacoes {
	public static function Calcula($expressao = '')
	{
		if (strpos($expressao, '-')) {
			return self::subtracao($expressao);
		}
		return self::soma($expressao);
	}

	public static function soma($expressao) {
		$numeros = explode('+',$expressao);

		$total = 0;
		foreach ($numeros as $num) {
			$total = $total + $num;
		}

		return $total;	
	} 

	public static function subtracao($expressao) {
		return $expressao[0] - $expressao[2];
	} 
}