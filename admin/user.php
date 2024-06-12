<?php
if(isset($_SESSION['userId'])){
    $smarty_main->assign("userId", $_SESSION['userId']);
}
if(isset($_SESSION['userName'])){
    $smarty_main->assign("userName", $_SESSION['userName']);
}
if (isset($_SESSION['userRule'])){
    $smarty_main->assign("userRule", $_SESSION['userRule']);
}
if(isset($_SESSION['userAvatar'])){
    $smarty_main->assign("userAvatar", $_SESSION['userAvatar']);
}
?>