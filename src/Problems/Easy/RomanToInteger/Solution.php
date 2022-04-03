<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $result = 0;
        $symbolsList = str_split($s);
        $lastIndex = count($symbolsList)-1;

        foreach ($symbolsList as $key => $symbol) {
            $mappedSymbol = $this->mapSymbol($symbol);
            if ($key < $lastIndex && $mappedSymbol < $this->mapSymbol($symbolsList[$key + 1])) {
                $result -= $mappedSymbol;
            } else {
                $result += $mappedSymbol;
            }
        }

        return $result;
    }

    function mapSymbol($symbol) {
        switch ($symbol) {
            case 'I':
                return 1;
            case 'V':
                return 5;
            case 'X':
                return 10;
            case 'L':
                return 50;
            case 'C':
                return 100;
            case 'D':
                return 500;
            case 'M':
                return 1000;
        }
    }
}