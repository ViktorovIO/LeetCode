<?php

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function fib($n) {
        if ($n == 0 || $n == 1) {
            return $n;
        }

        $fib = [0, 1];
        for($i = 1; $i < $n - 1; $i++)
        {
            $fib[] = $fib[$i]+$fib[$i-1];
            if (isset($fib[$i-2])) {
                unset($fib[$i-2]);
            }
        }

        return array_sum(array_slice($fib, -2));
    }
}