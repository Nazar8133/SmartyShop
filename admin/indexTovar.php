<?php
require_once ("header.php");
if (isset($_SESSION['userId'], $_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule'])) {
    require_once ("user.php");
    $smarty_main->assign("title", "Управління товарів");
    $smarty_tovar = new Smarty();
    $queryB = "select id, name from brend";
    $rezultB = mysqli_query($dbc, $queryB) or die("Error queryB");
    $brend = [];
    while ($rowB = mysqli_fetch_array($rezultB)) {
        $brend[] = array("id" => $rowB['id'], "name" => $rowB['name']);
    }
    $smarty_tovar->assign("brend", $brend);
    if (isset($_GET['idBrend']) && !empty($_GET['idBrend'])) {
        $smarty_tovar->assign("idBrend", $_GET['idBrend']);
        $queryT = "select tovar.id, title, fileName from tovar left join photo on tovar.id=photo.idTovar where idBrend={$_GET['idBrend']} and (photo.status=1 or photo.status is Null)";
    } else {
        $queryT = "select tovar.id, title, fileName from tovar left join photo on tovar.id=photo.idTovar where photo.status=1 or photo.status is Null";
    }
    $rezultT = mysqli_query($dbc, $queryT) or die("Error queryT!");
    $number = 0;
    $tovar = [];
    while ($rowT = mysqli_fetch_array($rezultT)) {
        $number++;
        $photo = $rowT['fileName'];
        if (empty($photo)) {
            $photo = "noPhoto.png";
        }
        $tovar[] = array("number" => $number, "photo" => $photo, "name" => $rowT['title'], "id" => $rowT['id']);
    }
    $smarty_tovar->assign("tovar", $tovar);
    $content = $smarty_tovar->fetch("indexTovar.tpl");
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>
