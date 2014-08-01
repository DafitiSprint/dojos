<?php

interface DbOperations
{

    public function load($parameters);
    public function insert($data);
    public function update($data);
    public function remove($id);
}
