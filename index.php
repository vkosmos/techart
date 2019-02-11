<?php

require __DIR__ . '/autoload.php';

$data = \App\Models\Article::findAll();
var_dump($data);

$users = \App\Models\User::findAll();
var_dump($users);

//$article = \App\Models\Article::findById(3);
//var_dump($article);