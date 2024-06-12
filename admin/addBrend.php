<?php
require_once ("header.php");
if(isset($_SESSION['userId'], $_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule'])) {
    require_once ("user.php");
    $smarty_main->assign("title", "Додати бренд");
    if (!isset($_POST['knopka'])) {
        $smarty_addBrend = new Smarty();
        $content = $smarty_addBrend->fetch("addBrand.tpl");// Метод fetch компілює php та tpl файл і результат компіляції зберігає в змінну
    } elseif (isset($_POST['brend'], $_POST['knopka']) && !empty($_POST['brend'])) {
        $query = "insert into brend (name) value ('{$_POST['brend']}')";
        mysqli_query($dbc, $query) or die("Error query!");


        $content = "Бренд успішно доданий!";
    } else {
        $content = "Недостатньо данних для додання бренду!";
    }
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>
