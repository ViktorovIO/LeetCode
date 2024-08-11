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

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isBalanced($root) {
        return $this->dfs($root)[0];
    }

    function dfs($root) {
        if ($root === null) {
            return [true, 0];
        }

        $left = $this->dfs($root->left);
        $right = $this->dfs($root->right);
        $balanced = $left[0] && $right[0] && abs($left[1] - $right[1]) <= 1;

        return [$balanced, 1 + max($left[1], $right[1])];
    }
}
