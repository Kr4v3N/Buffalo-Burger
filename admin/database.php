<?php

class Database
{
    private static $dbHost = 'localhost';
    private static $dbName = 'buffalo_burger';
    private static $dbUsername = 'root';
    private static $dbPassword = 'password';

    private static $connection;

    public static function connect()
    {
        if(self::$connection === null)
        {
            try
            {
                self::$connection = new PDO('mysql:host=' . self::$dbHost . ';dbname=' . self::$dbName , self::$dbUsername, self::$dbPassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }

    public static function disconnect()
    {
        self::$connection = null;
    }

}

Database::connect();
