<?php require __DIR__ . '/base.php';

class ItemRepoWithConstants extends ItemRepository
{
    const FORK = 'fork';
    public const KNIFE = 'knife';
    protected const SPOON = 'spoon';
}

$withConstants = new ItemRepoWithConstants($repo->search(null));

var_dump($withConstants->search(ItemRepoWithConstants::FORK));
var_dump($withConstants->search(ItemRepoWithConstants::KNIFE));
var_dump($withConstants->search(ItemRepoWithConstants::SPOON));
