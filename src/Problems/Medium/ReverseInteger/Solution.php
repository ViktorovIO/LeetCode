<?php

class Solution
{
    /**
     * @param int $x
     * @return int
     */
    function reverse(int $x): int
    {
        $temp = [];
        $arrayOfNumbers = str_split((string)$x);
        $isNegative = $x < 0;

        $i = count($arrayOfNumbers);
        while ($i > 0) {
            $i--;
            $temp[] = $arrayOfNumbers[$i];
        }

        $result = (int) implode('', $temp);
        $integerResult = $isNegative === true
            ? -1 * $result
            : $result;

        if ($this->isValid($integerResult) === false) {
            return 0;
        }

        return $integerResult;
    }

    private function isValid(int $x): bool
    {
        if ($x > 2147483648 || $x < -2147483648) {
            return false;
        }

        return true;
    }
}