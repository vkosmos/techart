<?php

namespace App;

class Db
{

    protected $dbh;

    public function __construct()
    {
        $config = Config::getInstance();

        $this->dbh = new \PDO(
            'mysql:host='.$config['db']['host'] . ';dbname=' . $config['db']['dbname'],
            $config['db']['user'],
            $config['db']['password']
            );

        return $this->dbh;
    }

    public function query($sql, $class, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        $res = $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        return $res;
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }



}