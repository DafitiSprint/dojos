<?php

require 'QueryObject.php';

class QueryObjectTest extends PHPUnit_Framework_TestCase
{
	public function testShouldReturnQuerySelect()
	{
		$query = new QueryObject($table = 'users');
		$expected = "SELECT * FROM users;";
		$result = $query->select()->toString();

		$this->assertEquals($expected, $result);
	}

	public function testShouldReturnQuerySelectWithWhereClause()
	{
		$query = new QueryObject($table = 'users');
		$expected = "SELECT * FROM users WHERE name = 'TestName';";
		$result = $query->select()
			->where("name = 'TestName'")
			->toString();

		$this->assertEquals($expected, $result);
	}

	public function testShouldReturnQuerySelectWith2WhereClauses()
	{
		$query = new QueryObject($table = 'users');
		$expected = "SELECT * FROM users WHERE name = 'TestName' AND age = 18;";
		$result = $query->select()
			->where("name = 'TestName'")
			->where("age = 18")
			->toString();

		$this->assertEquals($expected, $result);
	}
	
	public function testShouldReturnQuerySelectWithOrderStatement()
	{
		
		$query = new QueryObject($table = 'users');
		$expected = "SELECT * FROM users ORDER BY name;";
		$result = $query->select()
			->where("name = 'TestName'")
			->where("age = 18")
			->order("name")
			->toString();

		$this->assertEquals($expected, $result);
	}
}
