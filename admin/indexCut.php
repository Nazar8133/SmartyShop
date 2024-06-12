<?php
require_once ("header.php");
//echo $_SESSION['userId'];
if (isset($_SESSION['userRule'], $_SESSION['userName'], $_SESSION['userId'], $_SESSION['userAvatar'])) {
    require_once ("user.php");
    //echo $_SESSION['userAvatar'];
    $smarty_main->assign("title", "Управління брендами");
    $smarty_cut = new Smarty();
    $brend = [];
    $number = 0;
    $queryB = "select id, name from brend";
    $rezultB = mysqli_query($dbc, $queryB) or die("Error queryB!");
    while ($rowB = mysqli_fetch_array($rezultB)) {
        $number++;
        $brend[] = array("id" => $rowB['id'], "number" => $number, "name" => $rowB['name']);

    }
//$smarty_cut->assign("number", $number);
    $smarty_cut->assign("brend", $brend);

    $content = $smarty_cut->fetch("indexCut.tpl");
}
else{
    $content="У вас недостатньо прав для користуванням цієї сторінки!";
}
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
?>
