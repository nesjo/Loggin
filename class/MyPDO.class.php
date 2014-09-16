<?php
class MyPDO{
    public static $instance;
    
    private function __construct(){
        self::$instance = new PDO(
            "mysql:host=localhost;dbname=SEC-UGB;charset=utf8", 
            "root", 
            "021$", 
            null
        );
    }
    
    public static function getInstance(){
        if(self::$instance==null){
            self::$instance = new MyPDO();
        }
        return self::$instance;
    }
}

$mypdo = MyPDO::getInstance();
var_dump($mypdo);

