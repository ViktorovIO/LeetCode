<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        switch (true) {
            case empty($list1):
                return $list2;
            case empty($list2):
                return $list1;
            case $list1->val < $list2->val:
                $list1->next = $this->mergeTwoLists($list1->next, $list2);
                return $list1;
            default:
                $list2->next = $this->mergeTwoLists($list1, $list2->next);
                return $list2;
        }
    }
}