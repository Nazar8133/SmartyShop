<?php
session_start();
define("SMARTI_LIB", "../libs/");
require_once (SMARTI_LIB."Smarty.class.php");
$smarty_main=new Smarty();
require_once ("param.php");
if(isset($_COOKIE['userRule'], $_COOKIE['userId'], $_COOKIE['userName'], $_COOKIE['userAvatar'])){
    $_SESSION['userRule']=$_COOKIE['userRule'];
    $_SESSION['userId']=$_COOKIE['userId'];
    $_SESSION['userName']=$_COOKIE['userName'];
    $_SESSION['userAvatar']=$_COOKIE['userAvatar'];
}
?>
