<?php require __DIR__ . '/base.php';

class ItemRepoWithNamePrinter extends ItemRepository
{
    public function printAll() : void
    {
        return implode("\n", array_map(function(Item $item) {
            return $item->getName();
        }, $this->items));
    }
}

$withPrinter = new ItemRepoWithNamePrinter($repo->search(null));

var_dump($withPrinter->printAll());
