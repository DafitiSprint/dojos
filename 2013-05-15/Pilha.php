<?php

class Pilha 
{
	// Indica em que posição está o topo da pilha
	private $topo = -1;
 
	// Cria a pilha
	private $pilha = array(); 

	// Verifica se é o vetor está vazio, só vai retornar se $topo for igual a -1
	public function vazia() 
	{
	    return $this->topo == -1;
	}

	// Função Push
	public function push($valor) 
	{
	    // Incrementa topo
	    $this->topo++;
	 
	    // Pilha na posição topo recebe valor
	    return $this->pilha[$this->topo] = $valor;
	}
	 
	// Função Pop
	public function pop() 
	{
	    // Verifica se a pilha está vazia
	    if(!$this->vazia()) 
	    {
	        // Armazeno o valor para retornar antes de remover o valor que está no topo
	        $aux = $this->pilha[$this->topo];
	 
	        // Agora removemos o elemento do array
	        unset($this->pilha[$this->topo]);
	 
	        // Decrementa topo
	        $this->topo--;
	 
	        // Retorna o valor que foi removido
	        return $aux;
	    }
	}
	 
	// Função Peek
	public function peek() 
	{
	    // Verifica se a pilha está vazia
	    if(!$this->vazia()) 
	    {
	        // Retorna o topo
	        return $this->topo;
	    }
	}
}
