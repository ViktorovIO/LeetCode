<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if (strlen($s) !== strlen($t)) {
            return false;
        }

        $sCharsMap = [];
        foreach (str_split($s) as $item) {
            $sCharsMap[$item]++;
        }

        $tCharsMap = [];
        foreach (str_split($t) as $item) {
            $tCharsMap[$item]++;
        }

        return $sCharsMap == $tCharsMap;
    }
}
