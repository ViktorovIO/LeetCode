<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $mergedArray = [];
        $mergedArrayCount = count($nums1) + count($nums2);
        $isEvenTargetResult = $mergedArrayCount % 2 === 0;
        $i = $j = 0;
        $targetKey = round($mergedArrayCount / 2, 0, PHP_ROUND_HALF_DOWN);
        while ($i < count($nums1) || $j < count($nums2)) {
            if (isset($nums1[$i]) && $nums1[$i] <= $nums2[$j] || !isset($nums2[$j])) {
                $mergedArray[] = $nums1[$i];
                $i++;
            } else {
                $mergedArray[] = $nums2[$j];
                $j++;
            }

            if (isset($mergedArray[$targetKey])) {
                if ($isEvenTargetResult) {
                    return $mergedArray[$targetKey] !== 0 || $mergedArray[$targetKey-1] !== 0 ? (float)($mergedArray[$targetKey] + $mergedArray[$targetKey-1]) / 2 : 0;
                }

                return $mergedArray[$targetKey];
            }
        }
    }
}
