<?php

namespace App\Services;

class TreeNode
{
    public $value;
    public $children = [];

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function addChild(TreeNode $child)
    {
        $this->children[] = $child;
    }
}

class Tree
{
    public $root;

    public function __construct($value)
    {
        $this->root = new TreeNode($value);
    }

    public function traverse(TreeNode $node = null)
    {
        if ($node === null) {
            $node = $this->root;
        }

        echo $node->value . "\n";

        foreach ($node->children as $child) {
            $this->traverse($child);
        }
    }
}
