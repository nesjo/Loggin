<?php
session_start();
if($_SESSION["loggin"]=="OK"){
	echo "<h1>Welcome to site user loged-in</h1>";
}else{
	header("location: index.php");
}
