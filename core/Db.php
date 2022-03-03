<?php
namespace core;

use PDO;

class Db 
{
    private static null|object $db;

    public static function init($hostname, $username, $password, $database):bool
    {
        self::$db = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password,
               [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);

        if(!self::$db) throw new ErrorException('NO_SQL_CONNECTION');
        return true;
    }
}