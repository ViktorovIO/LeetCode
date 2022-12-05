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
    function middleNode($head) {
        $resultArray = [];
        do {
            $resultArray[] = $head->val;
            $next = $head->next;
            $head = $next;
        } while ($next !== null);

        $countOfFirstMiddleResult = intdiv(count($resultArray), 2);
        $resultArray = array_slice($resultArray, $countOfFirstMiddleResult);

        $result = new ListNode($resultArray[0]);
        $current = $result;
        for ($i = 1; $i < count($resultArray); $i++) {
            $current->next = new ListNode($resultArray[$i]);
            $current = $current->next;
        }

        return $result;
    }
}
