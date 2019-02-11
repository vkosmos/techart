<?php
/**
 * Created by PhpStorm.
 * User: magic
 * Date: 11.02.2019
 * Time: 17:35
 */

namespace App;


class View
implements \Countable
{
    protected $data;

    /**
     * Сохранение данных в произвольное свойство в объекте
     *
     * @param string $key
     * @param mixed $data
     */
    public function __set(string $key, $data)
    {
        $this->data[$key] = $data;
    }

    /**
     * Чтение произвольного свойства
     *
     * @param string $key
     * @return mixed
     */
    public function __get(string $key)
    {
        return $this->data[$key] ?? null;
    }

    /**
     * Проверка на наличие сохраненного свойства
     * 
     * @param string $key
     * @return bool
     */
    public function __isset(string $key)
    {
        return isset($this->data[$key]);
    }


    /**
     * Реализация интерфейса Countable.
     * Возвращает количество сохраненных произвольных свойств
     * 
     * @return int
     */
    public function count()
    {
        return count($this->data);
    }


    /**
     * ВОзвращает текст из переданного шаблона
     *
     * @param $template
     * @return string
     */
    public function render($template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    /**
     * Выводит текст из переданного шаблона
     *
     * @param $template Подключаемый файл с шаблоном
     */
    public function display($template)
    {
        echo $this->render($template);
    }

}