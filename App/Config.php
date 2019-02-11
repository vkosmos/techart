<?php

namespace App;


class Config
{
    protected static $_instance = null;
    public static $data = [];

    public static function getData()
    {
        if (self::$_instance === null){
            self::$_instance = new self;
        }
        return self::$data;

    }

    protected function __construct()
    {
        self::$data = include __DIR__ . '\config_data.php';
    }
}