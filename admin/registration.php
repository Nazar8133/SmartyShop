<?php
require_once ("header.php");
if(isset($_SESSION['userId'], $_SESSION['userName'], $_SESSION['userRule'], $_SESSION['userAvatar']) && $_SESSION['userRule']==2) {
    require_once ("user.php");
    $smarty_main->assign("title", "Реєстрація");
    if (!isset($_POST['knopka'])) {
        $smarty_registration = new Smarty();
        $smarty_registration->assign("name", $_GET['name']);
        $smarty_registration->assign("number", $_GET['number']);
        $content = $smarty_registration->fetch("registration.tpl");
    } elseif (isset($_POST['name'], $_POST['email'], $_POST['password1'], $_POST['password2'], $_POST['number']) && $_POST['password1'] == $_POST['password2'] && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['password1']) && !empty($_POST['password2'])) {
        $query1 = "select id from user where email='{$_POST['email']}'";
        $rezult1 = mysqli_query($dbc, $query1) or die("Error query1!");
        if (mysqli_num_rows($rezult1) > 0) {
            $content = "<h3 style='color: red'>Користувач з таким email вже існує</h3><br><a href='registration.php?name={$_POST['name']}&number={$_POST['number']}'>Назад до реєстрації</a>";
        } else {
            if ($_FILES['avatar']['error'] == 0) {
                $nameFile = time() . $_FILES['avatar']['name'];
                $nameFileTMP = $_FILES['avatar']['tmp_name'];
                move_uploaded_file($nameFileTMP, "imagesAvatar/$nameFile");
                $query = "insert into user(name, rule, avatar, email, password, number) values ('{$_POST['name']}', '{$_POST['rule']}', '$nameFile', '{$_POST['email']}', sha1('{$_POST['password2']}'), '{$_POST['number']}')";
            } else {
                $query = "insert into user(name, rule, email, password, number) values ('{$_POST['name']}', '{$_POST['rule']}', '{$_POST['email']}', sha1('{$_POST['password2']}'), '{$_POST['number']}')";
            }
            //echo $query;
            mysqli_query($dbc, $query) or die("Error query!");
            $content = "Ваші данні успішно добавлено!";
        }
    } else {
        $content = "Недостатньо данних для реєстрації!";
    }
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>
