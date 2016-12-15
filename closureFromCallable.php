<?php require __DIR__ . '/base.php';

class RepoWithClosure extends ItemRepository
{
    public function searchAsClosure() {
        return Closure::fromCallable([$this, 'search']);
    }
}

$withClosure = new RepoWithClosure($repo->search(null));
$defaultNull = function(Closure $closure) {
    return function($arg = null) use ($closure) {
        return $closure($arg);
    };
};

$search = $defaultNull($withClosure->searchAsClosure());
var_dump($search());
