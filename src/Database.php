<?php

namespace App;

use PDO;
use PDOException;


class Database
{
    public $mysql;
    public function __construct()
    {
        try{
            $this->mysql = $this->getConnection();
        } catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    private function getConnection()
    {
        $host = "localhost";
        $user="root";
        $pass="";
        $database="consultant";

        $charset = "utf-8";
        $options =[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new pdo("msql:host={$host};dbname={$database};charset")
    }
}