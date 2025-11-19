<?php 

namespace App\Model;

class Connection{
    private static $instance;

    public static function getConnection()
    {
        if(!isset(self::$instance))
            self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', '');
        
         return self::$instance;
        
    }
}


?>