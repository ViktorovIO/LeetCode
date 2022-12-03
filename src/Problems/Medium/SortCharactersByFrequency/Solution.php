<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function frequencySort($s) {
        $strSplit = str_split($s);
        $resultArray = [];
        foreach ($strSplit as $charItem) {
            $resultArray[$charItem] += 1;
        }

        arsort($resultArray, SORT_NUMERIC);
        $resultString = '';
        foreach ($resultArray as $key => $value) {
            $currentCharWithNeededCount = str_repeat($key, $value);
            $resultString .= $currentCharWithNeededCount;
        }

        return $resultString;
    }
}