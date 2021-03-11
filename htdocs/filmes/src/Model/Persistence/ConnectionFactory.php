<?php
namespace App\Model\Persistence;

use PDO;
use PDOException;

class ConnectionFactory{

    public $connection;

    public static function createConnection(){
        try {
            $connection = new PDO('mysql:host=db;dbname=locadora', 'root', 'toor');
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        
    }

}