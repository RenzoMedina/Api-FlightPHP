<?php

namespace DB;

class Connection{

    protected const DBLocal = "localhost";
    protected const DBName = "apiphp";
    protected const DBUser = "root";
    protected const DBPass = "";

    public static function start(){
        $dns = "mysql:host=".self::DBLocal.";dbname=".self::DBName;
        try{
            $pdo = new \PDO($dns, self::DBUser, self::DBPass);
            return $pdo;
        }
        catch(\PDOException $poe){
            echo "Error : ".$poe->getMessage();
        }
    }
}