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
class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public function addTwoNumbers($l1, $l2)
    {
        $carry = 0;
        $sum = 0;
        $result = new ListNode();
        $current = $result;
        do {
            if ($l1 !== null) {
                $sum += $l1->val;
                $l1 = $l1->next;
            }

            if ($l2 !== null) {
                $sum += $l2->val;
                $l2 = $l2->next;
            }

            $current->next = new ListNode($sum % 10);
            $carry = $sum / 10;

            $current = $current->next;
        } while ($l1 !== null || $l2 !== null);

        if ($carry !== 0) {
            $current->next = new ListNode($carry);
        }

        return $result->next;
    }
}