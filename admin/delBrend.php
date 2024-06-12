<?php
require_once ("header.php");
if (isset($_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule'], $_SESSION['userId'])) {
    require_once ("user.php");
    $smarty_main->assign("title", "Видалення бренда");
    if (isset($_GET['id'], $_GET['name']) && !empty($_GET['id']) && !empty($_GET['name'])) {
        $smarty_delBrend = new Smarty();
        $smarty_delBrend->assign("name", $_GET['name']);
        $smarty_delBrend->assign("id", $_GET['id']);
        $content = $smarty_delBrend->fetch("delBrend.tpl");
    } elseif (isset($_POST['del'], $_POST['knopka'], $_POST['id']) && $_POST['del'] == "Yes" && !empty($_POST['id'])) {
        $queryT = "select id from tovar where idBrend={$_POST['id']}";
        $rezultT = mysqli_query($dbc, $queryT) or die("Error queryT!");
        if (mysqli_num_rows($rezultT) > 0) {
            $content = "До даного бренда вже привязані товари! Щоб видалити даний бренд, для початку видаліть товари!<br><a href='indexTovar.php?idBrend={$_POST['id']}'>Перейти до управління товарами</a>";
        } else {
            $query = "delete from brend where id={$_POST['id']}";
            mysqli_query($dbc, $query) or die("Error query!");
            $content = "Бренд успішно видалено!";
        }
    } else {
        $content = "Бренд невдалося видалити!";
    }
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>
