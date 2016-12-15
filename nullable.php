<?php require __DIR__ . '/base.php';

var_dump($repo->get(1));
var_dump($repo->get(10));
var_dump($repo->search('fork'));
var_dump($repo->search(null));
var_dump($repo->search());
