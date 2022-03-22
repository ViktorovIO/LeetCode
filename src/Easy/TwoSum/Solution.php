<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target)
    {
        foreach ($nums as $key => $value) {
            $i = 1;
            while ($i < count($nums)) {
                if ($key !== $i && ($nums[$key] + $nums[$i]) === $target) {
                    return [$key, $i];
                }

                $i++;
            }
        }

        return [];
    }
}