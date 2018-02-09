<?php

class Database {

    public static function StartUp ()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=db_tests;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            throw new MyDatabaseException($e->getMessage(), $e->getCode());
        }
    }

}