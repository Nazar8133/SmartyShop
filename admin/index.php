<?php
require_once ("header.php");
if(isset($_SESSION['userId'], $_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule'])) {
    require_once ("user.php");
    $smarty_main->assign("title", "Головна сторінка адмін частини");
    $smarty_main->assign("content", "Виберіть пункт меню, щоб почати працювати");


    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>
