<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimumAverageDifference($nums) {
        $countOfNums = count($nums);
        if ($countOfNums < 2) {
            return 0;
        }

        $numsSum = array_sum($nums);
        $sumOfNums = 0;
        $averageDifferenceOfIndices = [];

        foreach ($nums as $key => $num) {
            $sumOfNums += $num;
            $numsSum -= $num;

            $dividend = ($countOfNums - $key - 1);
            if ($dividend <= 1) {
                $averageOfTheLast = $numsSum;
            } else {
                $averageOfTheLast = intdiv($numsSum, $dividend);
            }

            $averageDifferenceOfIndices[] = abs(intdiv($sumOfNums, ($key + 1)) - $averageOfTheLast);

        }

        return array_keys($averageDifferenceOfIndices, min($averageDifferenceOfIndices))[0];
    }
}