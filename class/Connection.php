<?php
/**
 * Description of Connection
 * @author allexiusw
 */

class Connection {
    
    public $con;
    public static $instance = null;
    
    private function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=Loggin","test","021$$");
    }
    
    public static function getInstance(){
        if(self::$instance==null){
            self::$instance = new Connection();
        }
        return self::$instance;
    }
}

/*$con = Connection::getInstance();
var_dump($con);*/

