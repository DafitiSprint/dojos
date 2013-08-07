<?php

class SpiralMatrix {
    public static function generate($columns, $rows)
    {
        $result = array();

        $totalElements = $columns * $rows;
        $current = 0;
        for ($r = 0; $r < $rows; $r++) {
            $line = array();
            for ($c = 0; $c < $columns; $c++) {
                $current += 1;
                $line[] = $current;
            }
            $result[] = $line;
        }

        $result[1] = array_reverse($result[1]);

        return $result;

    }
}
