<?php

class Primo {
	
	

	public function getFatoresPrimos($valor) {

		$numPrimos = array();
		$i = 2;

		while ($valor != 1) {
			if ($valor % $i == 0) {
				$valor = $valor / $i;
				$numPrimos[] = $i;
			} else {
				$i++;
			}

			if(($i * $i) > $valor){
				$numPrimos[] = $valor;
				break;
			}
		}

		return $numPrimos;
	}


}