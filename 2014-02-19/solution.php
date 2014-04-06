<?php

class UnionFind
{
private $id;

public function __construct($numberOfElements)
{
	for($i = 0; $i < $numberOfElements; $i++)
		$this->id[$i] = $i;
}

private function root($id)
{
	while($id != $this->id[$id])
		$id = $this->id[$id];
	return $id;
}

public function connected($a,$b)
{
	return $this->root($a) == $this->root($b);
}

public function union($a,$b)
{
	$a = $this->root($a);
	$b = $this->root($b);
	$this->id[$a] = $b;
}
}

$uf = new UnionFind(10);
$uf->union(0,1);
$uf->union(2,3);
$uf->union(5,1);
$resp = $uf->connected(0,5);

var_dump($resp);