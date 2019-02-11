<?php

namespace App;

abstract class Model
{
    public $id;

    const TABLE = 'news';

    /**
     * Возвращает все записи
     *
     * @return array
     */
//    public static function findAll()
//    {
//        $db = new Db();
//        $sql = 'SELECT * FROM ' . static::TABLE;
//        return $db->query($sql, static::class);
//    }

    /**
     * Возвращает конкретную запись
     * Если запись не найдена, возвращает false
     *
     * @param $id
     * @return mixed
     */
    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $params = [':id' => $id];

        $res = $db->query(
            $sql,
            static::class,
            $params
        );

        if (count($res) > 0){
            return $res[0];
        }
        else {
            return false;
        }
    }
}