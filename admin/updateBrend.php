<?php
require_once ("header.php");
if (isset($_SESSION['userId'], $_SESSION['userAvatar'], $_SESSION['userRule'], $_SESSION['userName'])) {
    require_once ("user.php");
    $smarty_main->assign("title", "Редагування бренду");
    if (isset($_GET['id'], $_GET['name']) && !empty($_GET['id']) && !empty($_GET['name'])) {
        $smarty_updateTovar = new Smarty();
        $smarty_updateTovar->assign("id", $_GET['id']);
        $smarty_updateTovar->assign("name", $_GET['name']);
        $content = $smarty_updateTovar->fetch("updateBrend.tpl");
    } elseif (isset($_POST['knopka'], $_POST['brend'], $_POST['id']) && !empty($_POST['brend']) && !empty($_POST['id'])) {
        $query = "update brend set name='{$_POST['brend']}' where id={$_POST['id']}";
        mysqli_query($dbc, $query) or die("Error query!");
        $content = "Ваші данні успішно відредаговано!";
    } else {
        $content = "Недостатньо данних для редагування!";
    }
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>
