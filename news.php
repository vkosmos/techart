<?php

require __DIR__ . '/App/autoload.php';

$ctrl = new \App\Controllers\NewsController();

try {

    $ctrl();

}catch (\App\Errors\DbException $er){
    echo $er->getMessage();
    $er->showDbConfigData();
}catch (\App\Errors\Page404Exception $er){
    echo $er->getMessage();
}