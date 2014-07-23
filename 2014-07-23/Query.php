<?php
class Query
{
    private $table;
    private $fields = '*';
    private $where = '';
    
    function __construct($table)
    {
        $this->table = $table;
    }

    public function getTable()
    {
        return $this->table;
    }

    public function generate()
    {
        return sprintf('SELECT %s FROM %s%s;', $this->fields, $this->table, $this->where);
    }

    public function select($fields)
    {
        $this->fields = implode(', ', (array) $fields);
        return $this;
    }

    public function where($where)
    {
        $this->where = ' WHERE ' . $where;
        return $this;
    }
}
