<?php

namespace App;

abstract class Model
{
    public $id;

    /**
     * Возвращает все записи
     *
     * @return array
     */
    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

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