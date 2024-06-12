<?php
require_once ("header.php");
if(isset($_SESSION['userId'], $_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule'])){
require_once ("user.php");
$smarty_main->assign("title", "Редагування пароля");
if(!isset($_POST['knopka'])) {
    $smarty_updatePasswort = new Smarty();
    $content = $smarty_updatePasswort->fetch("updatePasswort.tpl");
}
elseif (isset($_POST['knopka'], $_POST['oldPassword'], $_POST['newPassword1'], $_POST['newPassword2']) && !empty($_POST['oldPassword']) && !empty($_POST['newPassword1']) && !empty($_POST['newPassword2']) && $_POST['newPassword1']==$_POST['newPassword2']){
    $queryPassword="select password from user where id={$_SESSION['userId']}";
    $rezultPassword=mysqli_query($dbc, $queryPassword) or die("Error queryPassword!");
    $row=mysqli_fetch_array($rezultPassword);
    $oldPassword=$row['password'];
    if(sha1($_POST['oldPassword'])==$oldPassword){
        $query="update user set password=sha1('{$_POST['newPassword1']}') where id={$_SESSION['userId']}";
        mysqli_query($dbc, $query) or die("Error query!");
        if(isset($_COOKIE['userId'])){
            setcookie("userId", "", time()-60);
        }
        if(isset($_COOKIE['userName'])){
            setcookie("userName", "", time()-60);
        }
        if(isset($_COOKIE['userRule'])){
            setcookie("userRule", "", time()-60);
        }
        if(isset($_COOKIE['userAvatar'])){
            setcookie("userAvatar", "", time()-60);
        }
        $_SESSION=array();
        session_destroy();
        $content="Пароль успішно  відредаговано!";

        header("refresh:3, url=login.php");

    }
    else{
        $content="Неправильно введнно старий пароль!";
    }
}
else{
    $content="Недостатньо данних, або нові паролі неспівпадають!";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
}
else{
header("location: error404.html");
}
?>
