<?php require __DIR__ . '/base.php';

class RepoWithExceptions extends ItemRepository {
    public function search(?string $name) : array {
        if ($name === 'soup') {
            throw new \InvalidArgumentException('No soup for you!');
        }
        $results = parent::search($name);
        if (!count($results)) {
            throw new \OutOfBoundsException('Nothing matches that term.');
        }
        return $results;
    }
}

$withExceptions = new RepoWithExceptions($repo->search(null));
foreach (['soup', 'bowl', 'spoon'] as $name) {
    try {
        var_dump($withExceptions->search($name));
    } catch (\InvalidArgumentException | \OutOfBoundsException $e) {
        echo $e->getMessage() . "\n";
    }
}
