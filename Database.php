<?php

class Database {

    const DB_HOST = 'mysql:host=localhost;dbname=blog_jean_forteroche;charset=utf8';
    const DB_USER = 'root';
    const DB_PASS = '';

    //connexion method to Database
    public function getConnexion() {

        //try to connect to database
        try{
            $connection = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASS);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return  $connection;
        }
        //if connexion failed, we catch an error
        catch(Exception $errorConnection)
        {
            die ('Erreur de connection :'.$errorConnection->getMessage());
        }
    }

}