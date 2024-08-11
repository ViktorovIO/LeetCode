<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        $pointer = $fastPointer = $head;

        while ($fastPointer && $fastPointer->next) {
            $pointer = $pointer->next;
            $fastPointer = ($fastPointer->next)->next;

            if ($pointer === $fastPointer) {
                return true;
            }
        }

        return false;
    }
}
