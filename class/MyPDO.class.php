<?php
class MyPDO{
    public static $instance;
    public $con;
    
    private function __construct(){
        $this->con = new PDO("mysql:host=localhost;dbname=Login;","root","021$");
    }
    
    public static function getInstance(){
        if(empty(self::$instance)){
           self::$instance = new MyPDO();
        }
        return self::$instance;
    }
}

/*$mycon = MyPDO::getInstance();
var_dump($mycon);*/