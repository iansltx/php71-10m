<?php require __DIR__ . '/base.php';

[$firstFork, $secondFork] = $repo->search('fork');
var_dump($firstFork);

[3 => $thirdItem] = $repo->search(null);
var_dump($thirdItem);
