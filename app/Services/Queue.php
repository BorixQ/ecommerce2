<?php

namespace App\Services;

class Queue
{
    private $queue = [];

    public function enqueue($value)
    {
        array_push($this->queue, $value);
    }

    public function dequeue()
    {
        return array_shift($this->queue);
    }

    public function front()
    {
        return $this->queue[0] ?? null;
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }
}
