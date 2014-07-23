<?php
require "Query.php";
class QueryTest extends PHPUnit_Framework_TestCase
{
    public function testShouldReturnUsersTable()
    {
        $query = new Query('users');
        $result = $query->getTable();
        $expected = 'users';
        $this->assertEquals($expected, $result);
    }

    public function testShouldReturnRolesTable()
    {
        $query = new Query('roles');
        $result = $query->getTable();
        $expected = 'roles';
        $this->assertEquals($expected, $result);
    }

    public function testShouldGenerateSelectAllQueryFromUsers()
    {
        $query = new Query('users');
        $result = $query->generate();
        $expected = 'SELECT * FROM users;';
        $this->assertEquals($expected, $result);
    }

    public function testShouldGenerateSelectWithDefinedFieldsFromUsers()
    {
        $query = new Query('users');
        $query->select(array('username', 'password'));
        $result = $query->generate();
        $expected = 'SELECT username, password FROM users;';
        $this->assertEquals($expected, $result);
    }

    public function testShouldReturnQueryInstanceWithSelect()
    {
        $query = new Query('users');
        $expected = 'Query';
        $result = $query->select(array('username', 'password'));
        $this->assertInstanceOf($expected, $result);
    }

    public function testShouldGenerateSelectWithWhere()
    {
        $query = new Query('users');
        $expected = "SELECT * FROM users WHERE username = 'Mario';";
        $query->where("username = 'Mario'");
        $result = $query->generate();

        $this->assertEquals($expected, $result);
    }

    public function testShouldGenerateSelectDefinedFieldWithWhere()
    {
        $expected = "SELECT username FROM users WHERE username='Mario';";

        $query = (new Query('users'))
            ->select('username')
            ->where("username='Mario'");

        $result = $query->generate();

        $this->assertEquals($expected, $result);

    }
}
