<?php

class TreeList {

    private $list;

    public function __construct(array $list)
    {
        $this->list = $list;
    }

    public function toArray()
    {
        foreach ($this->list as $node) {
            if (is_null($node[1])){
                $data = array(
                    'id' => $node[0],
                    'name' => $node[2],
                    'children' => array(),
                );
            }
            else {
                $data['children'][] = array(
                    'id' => $node[0],
                    'name' => $node[2],
                    'children' => array(),
                );
            }  
        }    

        return $data;
    }
}
