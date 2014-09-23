<?php
/*include_once './Connection.php';
include_once './Users.php';*/
/**
 * Description of UsersDAO
 * @author allexiusw
 */
class UsersDAO {
    public $con;
    
    public function __construct($conect) {
        $this->con = $conect->con;
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public function add($user){
        $stmt = $this->con->prepare("INSERT INTO Users VALUES(:user, :pass)");
        $stmt->execute(array(":user"=>$user->getUser(),":pass"=>$user->getPass()));
        return $stmt->rowCount();
    }
    
    public function delete(){
        
    }
    
    public function update(){
        
    }
    public function checkAccess($user){
        $stmt = $this->con->prepare("SELECT * FROM Users WHERE user=:user AND pass=:pass LIMIT 1");
        $stmt->execute(array(":user"=>$user->getUser(),":pass"=>$user->getPass()));
        return $stmt->fetchAll();
    }
}
/*$user = new Users("test", md5("testd"));
$userDAO = new UsersDAO(Connection::getInstance());
$rows= $userDAO->checkAccess($user);
if($rows):
    $user->initSession();
else:
    echo "Ud no esta registrado";
endif;*/
