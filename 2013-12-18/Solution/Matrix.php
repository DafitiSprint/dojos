<?php
class Matrix
{
	private $size;
	private $values;

	public function getSize()
	{
		return $size;
	}

	public function setSize($size)
	{
		if(!is_int($size) || $size < 5){
			throw new Exception("Size must be an integer greater or equal to 5");
		}
		$this->size = $size;
	}

	public function getValues()
	{
		return $values;
	}

	public function setValues(array $values)
	{
		if(!isset($this->size)){
			throw new Exception("Set the size of the matrix, before setting values");
		}
		if(count($values) != $this->size * $this->size){
			throw new Exception ("Number of values doesn't match the size of the matrix");
		}
		$this->values = $values;
	}
}