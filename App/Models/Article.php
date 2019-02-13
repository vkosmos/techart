<?php

namespace App\Models;


use App\Db;
use App\Model;

class Article
    extends Model
{
    const TABLE = 'news';

    public $title;
    public $announce;
    public $content;
    public $idate;

    /**
     * Возвращает все новости, упорядоченные по дате, в порядке убывания
     *
     * @return array
     */
    public function getAllByDate()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY idate DESC';
        return $db->query($sql, static::class);
    }

    /**
     * Возвращает новости для текущей страницы
     * исходя из номера страницы $page и количества отображаемых новостей $number
     *
     * @param $page
     * @param $number
     * @return array
     */
    public function getPage($page, $number)
    {
        $db = new Db();
        $start = ($page - 1) * $number;
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY idate DESC LIMIT ' . $start . ', ' . $number;
        return $db->query($sql, static::class);
    }
    
}