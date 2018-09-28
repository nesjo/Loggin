<?php
session_start();
include_once './class/Connection.php';
include_once './class/Users.php';
include_once './class/UsersDAO.php';
$error = 1;
if($_POST):
    $con = Connection::getInstance();
    $user = new Users($_POST['user'], md5($_POST['pass']));
    $userDAO = new UsersDAO($con);
    $rows = $userDAO->checkAcces($user);
    if($rows):
	$_SESSION["loggin"]="OK";
        $user->initSession();
        header("location: welcome.php");
    else:
        $error =2;
    endif;
endif;
?>
<!doctype html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Bootstrap Integration Loggin</title>
        <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap-theme.min.css" />
        <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
        <style rel="stylesheet">   
            .jumbotron{
                max-width: 550px;
                margin: 0 auto;
                margin-top: 25px;
            }
            #botones{
                text-align: center;
            }
            #botones > button{
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php
            if($error=2):
            ?>
                <div id="mensaje" class="alert alert-danger">El usuario y/o password es incorrecto</div>
            <?php endif; ?>
            <div class="jumbotron">
                <form class="form-signin" role="form" method="post">
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <input type="text" name="user" class="form-control" placeholder="Email address" required="" autofocus="">
                    <input type="password" name="pass" class="form-control" placeholder="Password" required="">
                    <div id="botones" class="input-group center-block">
                        <input class="btn btn-primary" type="submit" value="Enviar"/>
                        <button class="btn btn-danger" type="reset">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
