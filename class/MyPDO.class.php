<?php
class MyPDO extends PDO{
    public static $instance;
    
    private function __construct(){
        self::$instance = parent::__construct(
            "mysql:host=localhost;dbname=SEC-UGB;charset=utf8", 
            "root", 
            "021$", 
            null
        );
    }
    
    public static function getInstance(){
        if(self::$instance==null){
            self::$instance = new Connection;
        }
        return self::$instance;
    }
}

$mypdo = MyPDO::getInstance();
var_dump($mypdo);

