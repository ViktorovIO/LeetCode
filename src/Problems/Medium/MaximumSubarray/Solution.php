<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $maxSum = $nums[0];
        $curSum = 0;

        foreach ($nums as $n) {
            if ($curSum < 0) {
                $curSum = 0;
            }

            $curSum += $n;
            $maxSum = max($maxSum, $curSum);
        }

        return $maxSum;
    }
}
