<?php
require_once ("header.php");
require_once ("user.php");
$smarty_main->assign("title", "Видалення фото");
if(isset($_GET['fileName'], $_GET['id'], $_GET['idTovar']) && !empty($_GET['fileName']) && !empty($_GET['id']) && !empty($_GET['idTovar'])){
    $smarty_delPhoto= new Smarty();
    $smarty_delPhoto->assign("fileName", $_GET['fileName']);
    $smarty_delPhoto->assign("id", $_GET['id']);
    $smarty_delPhoto->assign("idTovar", $_GET['idTovar']);
    $content=$smarty_delPhoto->fetch("delPhoto.tpl");
}
elseif (isset($_POST['del'], $_POST['knopka'], $_POST['id'], $_POST['idTovar'], $_POST['fileName']) && !empty($_POST['id']) && !empty($_POST['fileName']) && !empty($_POST['idTovar']) && $_POST['del']=="Yes"){
    @unlink("../images/{$_POST['fileName']}");
    $query="delete from photo where id='{$_POST['id']}'";
    mysqli_query($dbc, $query) or die("Error query!");
    $content="Видалення успішне!";
}
else{
    $content="Фото невдалось видалити!";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
?>

