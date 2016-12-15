<?php require __DIR__ . '/base.php';

class RepoWIthImporter extends ItemRepository
{
    public function import(iterable $items)
    {
        foreach ($items as $item) {
            $this->items[] = $item;
        }
    }
}

$withImporter = new RepoWithImporter($repo->search(null));
$iterator = new ArrayIterator([new Item('plate'), new Item('cup')]);
$array = [new Item('placemat')];

$withImporter->import($iterator);
$withImporter->import($array);

var_dump($withImporter->search('cup'));
var_dump($withImporter->search('placemat'));
