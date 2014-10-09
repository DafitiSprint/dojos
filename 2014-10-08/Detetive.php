<?php

class Detetive
{

    private $list = [];
    private $counter = [];

    public function __construct(array $list)
    {
        $this->list = $list;
    }
    
    public function search()
    {
        if (empty($this->list)) {

            return null;
        }

        if (count($this->list) == 1) {

            return reset($this->list);
        }

        foreach ($this->list as $item) {
            if (!array_key_exists($item, $this->counter)) {
                $this->counter[$item] = 1;
            } else {
                $this->counter[$item]++;
            }
        }

        $lowest["item"] = key($this->counter);
        $lowest["count"] = $this->counter[$lowest["item"]];

        foreach ($this->counter as $key => $value) {
            if ($lowest["item"] == $key) {

                continue;
            }

            if ($lowest["count"] < $value) {
                $lowest["count"] = $value;
                $lowest["item"] = $key;

                continue;
            }
        }

        if (count(array_keys($this->counter, $lowest["count"])) > 1) {
            return null;
        };

        return $lowest;
    }


}
