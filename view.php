<?php

require __DIR__ . '/App/autoload.php';

$ctrl = new \App\Controllers\ArticleController();

try{

    $ctrl();

}catch (\PDOException $er){
    echo $er->getMessage();
    $er->showDbConfigData();
}catch (\App\Errors\Page404Exception $er){
    echo $er->getMessage();
}