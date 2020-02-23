<?php

class Connection
{
    private $link;

    public function __construct()
    {
        $this->connect();
    }

    public function connect(){
        try{
            $host = '127.0.0.1';
            $db_name = 'names';
            $db_table = 'pnames';
            $charset = 'utf8';
            $user = 'root';
            $pass = '';

            $dsn = 'mysql:host='.$host.';dbname='.$db_name.';charset'.$charset;

            $this->link =  new \PDO($dsn, $user, $pass);

        }catch (\Exception $e){
            $e->getMessage();
        }
    }

    public function execute($sql, $values = [])
    {
        $sth = $this->link->prepare($sql);

        return $sth->execute($values);
    }

    public function query($sql, $values = [])
    {
        $sth = $this->link->prepare($sql);

        $sth->execute($values);

        $result = $sth->fetchAll(\PDO::FETCH_ASSOC);

        if($result == false){
            return[];
        }

        return $result;
    }
}