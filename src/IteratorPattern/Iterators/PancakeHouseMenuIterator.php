<?php

namespace App\IteratorPattern\Iterators;

use App\IteratorPattern\Interfaces\Iterator;

class PancakeHouseMenuIterator implements Iterator
{
    protected $items = [];

    protected $position = 0;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function next()
    {
        return $this->items[$this->position++];
    }

    public function hasNext()
    {
        return isset($this->items[$this->position]);
    }
}
