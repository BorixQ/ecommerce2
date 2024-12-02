<?php

namespace App\Services;

class LinkedList
{
    public $head = null;

    public function addNode($value)
    {
        $node = new ListNode($value);
        if ($this->head === null) {
            $this->head = $node;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $node;
        }
    }

    public function traverse()
    {
        $current = $this->head;
        while ($current !== null) {
            echo $current->value . "\n";
            $current = $current->next;
        }
    }
}

class ListNode
{
    public $value;
    public $next = null;

    public function __construct($value)
    {
        $this->value = $value;
    }
}
