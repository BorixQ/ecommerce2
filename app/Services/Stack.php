<?php

namespace App\Services;

class Stack
{
    private $stack = [];

    public function push($value)
    {
        array_push($this->stack, $value);
    }

    public function pop()
    {
        return array_pop($this->stack);
    }

    public function peek()
    {
        return end($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}
