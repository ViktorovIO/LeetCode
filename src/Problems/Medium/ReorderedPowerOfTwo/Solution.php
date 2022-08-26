<?php

class Solution
{
    /**
     * @param int $n
     * @return bool
     */
    function reorderedPowerOf2(int $n): bool
    {
        $strings = [];
        $i = 1;
        $max = pow(10, 9);
        while ($i <= $max) {
            $chars = str_split((string)$i);
            sort($chars);
            $char = implode('', $chars);
            $strings[$char] = $char;
            $i *= 2;
        }

        $nums = str_split((string)$n);
        sort($nums);
        $n = implode('', $nums);

        return (isset($strings[$n]));
    }
}