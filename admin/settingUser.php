<?php
require_once ("header.php");
if (isset($_SESSION['userId'], $_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule'])) {
    require_once("user.php");
    $smarty_main->assign("title", "Редагування профіля");
    if (!isset($_POST['knopka'])) {
        $smarty_setting = new Smarty();
        $query = "select name, avatar, email, number from user where id={$_SESSION['userId']}";
        $rezult = mysqli_query($dbc, $query) or die("Error query!");
        $row = mysqli_fetch_array($rezult);
        $smarty_setting->assign("name", $row['name']);
        if(empty($row['avatar'])){
            $row['avatar']="noavatar.jpg";
        }
        $smarty_setting->assign("avatar", $row['avatar']);
        $smarty_setting->assign("email", $row['email']);
        $smarty_setting->assign("number", $row['number']);
        //echo $row['avatar'];
        $content = $smarty_setting->fetch("settingUser.tpl");
    } elseif (isset($_POST['name'], $_POST['email'], $_POST['number'], $_POST['knopka']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number'])) {
        if ($_FILES['newAvatar']['error'] == 0) {
            if (!empty($_POST['oldPhoto']) && $_POST['oldPhoto'] != "noavatar.jpg") {
                unlink("imagesAvatar/{$_POST['oldPhoto']}");
            }
            $fileName = time().$_FILES['newAvatar']['name'];
            $fileNameTMP = $_FILES['newAvatar']['tmp_name'];
            move_uploaded_file($fileNameTMP, "imagesAvatar/$fileName");
            $querySetting = "update user set name='{$_POST['name']}', email='{$_POST['email']}', number='{$_POST['number']}', avatar='$fileName' where id={$_SESSION['userId']}";
        } else {
            $querySetting = "update user set name='{$_POST['name']}', email='{$_POST['email']}', number='{$_POST['number']}' where id={$_SESSION['userId']}";
        }
        mysqli_query($dbc, $querySetting) or die("Error querySetting!");
        $content = "Ваш профіль успішно відредаговано! Для збереження данних потрібно перезайти!";

        header("refresh:5, url=exit.php");
    } else {
        $content = "Недостатньо данних для редагування профіля!";
    }
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
        header("location: ../error404.html");
    }
?>
