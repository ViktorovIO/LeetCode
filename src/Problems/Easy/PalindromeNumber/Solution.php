<?php

class Solution
{

    /**
     * @param int $x
     * @return bool
     */
    function isPalindrome(int $x): bool
    {
        if ($x >= 0) {
            $reversedX = $this->reverseInt($x);
            if ($reversedX === $x) {
                return true;
            }
        }

        return false;
    }

    private function reverseInt(int $x): int
    {
        $temp = $x;
        $result = 0;

        while ($temp > 0) {
            $result = ($result * 10) + ($temp % 10);
            $temp = (int) ($temp / 10);
        }

        return $result;
    }
}