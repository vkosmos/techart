<?php

namespace App;

abstract class Controller
{

    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    abstract public function __invoke();

    /**
     * Фильтрация переданных через GET данных
     *
     * @param $data
     * @return mixed
     */
    protected function clearUserInput($name)
    {
        return filter_input(INPUT_GET, $name, FILTER_SANITIZE_NUMBER_INT);
    }

}