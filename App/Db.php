<?php

namespace App;

class Db
{

    protected $dbh;

    public function __construct()
    {
        $config = Config::getInstance();

        $this->dbh = new \PDO(
            'mysql:host='.$config->getData()['db']['host'] . ';dbname=' . $config->getData()['db']['dbname'],
            $config->getData()['db']['user'],
            $config->getData()['db']['password']
            );

        return $this->dbh;
    }

    public function query($sql, $class = 'stdClass', $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }



}