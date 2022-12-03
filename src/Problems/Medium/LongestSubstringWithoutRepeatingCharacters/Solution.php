<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $strlen = strlen($s);
        if ($strlen <= 1) {
            return $strlen;
        }

        $subStrlen = [];

        for ($i = 0; $i < $strlen; $i++) {
            $subStrArr = [];
            $subStrArr[] = $s[$i];

            for ($j = $i+1; $j < $strlen; $j++) {
                $subStrArr[] = $s[$j];
                if (count(array_unique($subStrArr)) !== count($subStrArr)) {
                    array_pop($subStrArr);
                    break;
                }

            }

            $subStrlen = count($subStrArr) > count($subStrlen)
                ? $subStrArr
                : $subStrlen;
        }

        return count($subStrlen);
    }
}
