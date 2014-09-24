<?php
<<<<<<< HEAD
session_start();
include_once './MyPDO.class.php';
include_once './Users.class.php';
/**
 * Description of UsersDAO
 *
 * @author allexiusw
 */
class UsersDAO {
    public $db;
    
    public function __construct($_db) {
        $this->db = $_db;
        $this->db->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public function add($user){
        $stmt = $this->db->con->prepare("INSERT INTO Users VALUES(:user, :pass)");
        $stmt->execute(array(":user"=> $user->getUser(), ":pass"=> $user->getPass()));
        return $stmt->rowCount();
    }
    
    public function getAll(){
        $stmt = $this->db->con->prepare("SELECT * FROM Users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Users");
    }
    
    public function checkAcces($user){
        $stmt = $this->db->con->prepare(
            "SELECT * FROM Users WHERE user=:user AND pass=:pass LIMIT 1"
        );
        $stmt->execute(
            array(
                ":user"=>$user->getUser(), 
                ":pass"=> $user->getPass()
            )
        );
        return $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Users");
    }
}

/*$user = new Users("ubuntu", md5("allexiusw"));
$userDAO = new UsersDAO(MyPDO::getInstance());

//echo $userDAO->add($user);
$rows = $userDAO->checkAcces($user);
if($rows):
    $rows[0]->initSession();
    echo $rows[0]->getUser();
else:
    echo "No esta Permitido";
endif;
//var_dump($rows);*/
=======
include_once './Connection.php';
include_once './Users.php';
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
$user = new Users("test", md5("testd"));
$userDAO = new UsersDAO(Connection::getInstance());
$rows= $userDAO->checkAccess($user);
if($rows):
    $user->initSession();
else:
    echo "Ud no esta registrado";
endif;
>>>>>>> 0acf2acfc4840d4839e74419197af28053005e0f
