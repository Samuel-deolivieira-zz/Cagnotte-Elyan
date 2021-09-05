<?php 

namespace App;

define('PDO_DBNAME', 'cagnotte-elyan');
define('PDO_HOST', 'localhost');
define('PDO_USER', 'root');
define('PDO_PASSWORD', '');

class PdoFactory {
    private static $pdo;
    public static function initConnection(){
        $dsn = 'mysql:dbname=' . PDO_DBNAME . ';host=' . PDO_HOST;
        self::$pdo = new \PDO($dsn, PDO_USER, PDO_PASSWORD);
        self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public static function getPdo()
    {
        if (is_null(self::$pdo)) {
            self::initConnection();
        }

        return self::$pdo;
    }

}