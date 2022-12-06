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
     * @param ListNode $head
     * @return ListNode
     */
    function oddEvenList($head) {
        if ($head->next === null) {
            return new ListNode($head->val);
        }

        $result = new ListNode($head->val);
        $current = $result;

        $temp = [];
        $counter = 0;

        do {
            $value = $head->next;

            if ($counter % 2 !== 0) {
                $current->next = new ListNode($value->val);
                $current = $current->next;
            } else {
                $temp[] = $value->val;
            }

            $head = $head->next;
            $counter++;
        } while ($head->next !== null);

        foreach ($temp as $item) {
            $current->next = new ListNode($item);
            $current = $current->next;
        }

        return $result;
    }
}
