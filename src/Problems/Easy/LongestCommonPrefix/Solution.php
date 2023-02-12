<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $strsCount = count($strs);
        if ($strsCount < 2) {
            return $strs ? $strs[0] : "";
        }

        $tempPrefix = $strs[0];

        for ($i = 0; $i < $strsCount; $i++) {
            for ($j = 0; $j < strlen($tempPrefix); $j++) {
                if (isset($strs[$i][$j]) && $tempPrefix[$j] === $strs[$i][$j]) {
                    $tempPrefix[$j] = $strs[$i][$j];
                } else {
                    break;
                }
            }

            $tempPrefix = substr($tempPrefix, 0, $j);
        }

        return $tempPrefix;
    }
}
