<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {
    private $sum = 0;

    /**
     * @param TreeNode $root
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function rangeSumBST($root, $low, $high) {
        $this->checkValue($root, $low, $high);
        return $this->sum;
    }

    private function checkValue($root, $low, $high) {
        if ($root === null) {
            return;
        }

        $this->checkValue($root->left, $low, $high);
        $rootValue = $root->val;
        if ($rootValue >= $low && $rootValue <= $high) {
            $this->sum += $rootValue;
        }

        $this->checkValue($root->right, $low, $high);
    }
}
