<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */

class Solution {
    /**
     * @param TreeNode $root
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    function lowestCommonAncestor($root, $p, $q) {
        $current = $root;
        while ($current) {
            if ($p->val > $current->val && $q->val > $current->val) {
                $current = $current->right;
            } else if ($p->val < $current->val && $q->val < $current->val) {
                $current = $current->left;
            } else {
                return $current;
            }
        }
    }
}
