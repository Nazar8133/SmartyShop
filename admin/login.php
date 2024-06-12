<?php
require_once ("header.php");
require_once ("user.php");
$smarty_main->assign("title", "Вхід");
if (!isset($_POST['knopka'])){
    $smarty_login=new Smarty();
    $content=$smarty_login->fetch("login.tpl");
}
elseif(isset($_POST['name'], $_POST['password'], $_POST['knopka']) && !empty($_POST['name']) && !empty($_POST['password'])) {
    $query = "select id, name, rule, avatar, email, password, number from user where name='{$_POST['name']}' and password=sha1('{$_POST['password']}')";
    echo sha1($_POST['password']);
    $rezult = mysqli_query($dbc, $query) or die("Error query!");
    if (mysqli_num_rows($rezult)==1){
        $row = mysqli_fetch_array($rezult);
        $id = $row['id'];
        $name = $row['name'];
        $rule = $row['rule'];
        $avatar = $row['avatar'];
        if (empty($avatar)) {
            $avatar = "noavatar.jpg";
        }
        //echo $rule;
        $email = $row['email'];
        $number = $row['number'];
        setcookie("userId", $id, time() + 60 * 60 * 24 * 30 * 3);
        setcookie("userName", $name, time() + 60 * 60 * 24 * 30 * 3);
        setcookie("userRule", $rule, time() + 60 * 60 * 24 * 30 * 3);
        setcookie("userAvatar", $avatar, time() + 60 * 60 * 24 * 30 * 3);
        $_SESSION['userId'] = $id;
        $_SESSION['userName'] = $name;
        $_SESSION['userRule'] = $rule;
        $_SESSION['userAvatar'] = $avatar;
        $content = "Вхід успішний!";
        header("refresh:2; url=index.php");
    }
    else{
        $content="Невірний логін або пароль!";
    }
}
else{
    $content="Невдалось ввійти!";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
?>
