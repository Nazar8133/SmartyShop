<?php
require_once ("header.php");
$smarty_main->assign("title", "Вихід");
$smarty_exit=new Smarty();
$content=$smarty_exit->fetch("exit.tpl");
if(isset($_COOKIE['userId'])){
    setcookie("userId", "", time()-60);
}
if(isset($_COOKIE['userName'])){
    setcookie("userName", "", time()-60);
}
if (isset($_COOKIE['userRule'])){
    setcookie("userRule", "", time()-60);
}
if (isset($_COOKIE['userAvatar'])){
    setcookie("userAvatar", "", time()-60);
}
$_SESSION=array();
session_destroy();
$content="Вихід успішний!";
header("location: ../index.php");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
?>
