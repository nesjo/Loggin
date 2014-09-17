<?php
/**
 * Description of Users
 * @author allexiusw
 */
class Users {
    private $user;
    private $pass;
    
    function __construct($user=null, $pass=null) {
        $this->user = $user;
        $this->pass = $pass;
    }

    public function getUser() {
        return strtolower($this->user);
    }

    public function getPass() {
        return $this->pass;
    }

    public function setUser($user) {
        $this->user = strtolower($user);
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }
    public function initSession(){
        $_SESSION['user']= $this->user;
        $_SESSION['permitido'] = "yes";
    }
}

/*$user = new Users("william", md5("william"));
var_dump($user);*/