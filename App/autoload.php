<?php

spl_autoload_register(

    function($class)
    {
        require __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';

//        $adr = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
//        var_dump($adr);


    }
);