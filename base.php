<?php

class Item
{
    protected $name;
    public function __construct(string $name) {$this->name = $name;}
    public function getName()                 {return $this->name;}
}

class ItemRepository
{
    protected $items;
    public function __construct(array $items) {$this->items = $items;}

    public function get(int $id) : ?Item
    {
        return isset($this->items[$id]) ? $this->items[$id] : null;
    }

    public function search(?string $name) : array
    {
        return array_values(array_filter($this->items, function(Item $item) use ($name) {
            return !$name ?: $item->getName() === $name;
        }));
    }
}

$repo = new ItemRepository([1 => new Item('fork'), 2 => new Item('fork'), 3 => new Item('spoon'), 4 => new Item('knife')]);
