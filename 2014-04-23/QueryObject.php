<?php

class QueryObject 
{
	protected $query;

	protected $table;

	protected $whereAlreadyCalled = false;

	public function __construct($table)
	{
		$this->table = $table;
	}

	public function select()
	{
		$this->query = 'SELECT * FROM '.$this->table ;
		return $this;				
	}

	public function toString()
	{
		return $this->query . ';';
	}

	public function where($condition)
	{
		if (! $this->whereAlreadyCalled) {
			$this->query .=  " WHERE " . $condition;
			$this->whereAlreadyCalled = true;
		} else {
			$this->query .=  " AND " . $condition;
		}

		return $this;
	}
}
