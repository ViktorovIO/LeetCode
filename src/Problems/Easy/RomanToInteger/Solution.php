<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $result = 0;
        $mapSymbolArray = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $symbolsList = str_split($s);
        $lastIndex = count($symbolsList)-1;

        foreach ($symbolsList as $key => $symbol) {
            $mappedSymbol = $mapSymbolArray[$symbol];
            if ($key < $lastIndex && $mappedSymbol < $mapSymbolArray[$symbolsList[$key + 1]]) {
                $result -= $mappedSymbol;
            } else {
                $result += $mappedSymbol;
            }
        }

        return $result;
    }
}