<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        return $this->checkIndex($nums, $target);
    }

    function checkIndex($nums, $target, $start = 0, $end = null) {
        if ($end === null) {
            $end = count($nums) - 1;
        }

        if ($start > $end) {
            return -1;
        }

        $searchIndex = (int)(($start + $end) / 2);

        if ($nums[$searchIndex] !== $target) {
            if ($nums[$searchIndex] < $target) {
                $start = $searchIndex + 1;
            } else {
                $end = $searchIndex - 1;
            }

            return $this->checkIndex($nums, $target, $start, $end);
        }

        return $searchIndex;
    }
}
