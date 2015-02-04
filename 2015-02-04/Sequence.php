<?php

class Sequence
{
    private $sequence;
    public function __construct($_sequence){
        $this->sequence = $_sequence;
    }

    public function group()
    {
        $groups = -1;
        $result = [];
        $cursor = $this->sequence[0];
        foreach ($this->sequence as $v) {
            if ($v - $cursor != 1) {
                $groups++;
            }

            if (isset($result[$groups][1])) {
                $result[$groups][1] = $v;
            } else {
                $result[$groups][] = $v;
            }

            $cursor = $v;
        }
        return $result;
    }
}
