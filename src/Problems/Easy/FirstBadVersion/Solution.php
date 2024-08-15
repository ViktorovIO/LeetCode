<?php

/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        if ($this->isBadVersion(1) === true || $n === 1) {
            return 1;
        }

        $l = 1;
        $r = $n;

        while ($l < $r) {
            $m = (int)(($l + $r) / 2);
            if ($this->isBadVersion($m)) {
                $r = $m;
            } else {
                $l = $m + 1;
            }
        }

        return $l;
    }
}
