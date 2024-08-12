<?php

class MyQueue {
    /**
     * int[] $items
     */
    private array $items = [];

    /**
     */
    function __construct() {
        $this->items = [];
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->items[] = $x;
    }

    /**
     * @return Integer
     */
    function pop() {
        $item = $this->items[0];
        unset($this->items[0]);
        $this->items = array_values($this->items);

        return $item;
    }

    /**
     * @return Integer
     */
    function peek() {
        return $this->items[0];
    }

    /**
     * @return Boolean
     */
    function empty() {
        return empty($this->items);
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */
