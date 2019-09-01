<?php

abstract class Database {

    const DB_HOST = 'mysql:host=localhost;dbname=blog_jean_forteroche;charset=utf8';
    const DB_USER = 'root';
    const DB_PASS = '';

    private $connection;

    private function checkConnection()
    {
        //check if the connection is null and call getConnection()
        if($this->connection === null) {
            return $this->getConnection();
        }
        //if the connection exist; its retruned
        return $this->connection;
    }

    //connexion method to Database
    public function getConnection() {

        //try to connect to database
        try{
            $connection = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASS);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return  $connection;
        }
        //if connection failed, we catch an error
        catch(Exception $errorConnection)
        {
            die ('Erreur de connection :'.$errorConnection->getMessage());
        }
    }

    protected function createQuery($sql, $parameters = null)
    {
        if($parameters)
        {
            $result = $this->getConnection()->prepare($sql);
            $result->setFetchMode(PDO::FETCH_CLASS, static::class);
            $result->execute($parameters);
            return $result;
        }
        $result = $this->getConnection()->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, static::class);
        return $result;
    }

}