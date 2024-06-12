<?php
require_once ("header.php");
if(isset($_SESSION['userId'], $_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule']) && $_SESSION['userRule']==2) {
    require_once ("user.php");
    $smarty_main->assign("title", "Управління сторінки");
    $smarty_page = new Smarty();
    $queryP = "select id, name from settingPage";
    $rezultP = mysqli_query($dbc, $queryP) or die("Error queryP!");
    $number = 0;
    $page = [];
    while ($rowP = mysqli_fetch_array($rezultP)) {
        $number++;
        $page[] = array("id" => $rowP['id'], "name" => $rowP['name'], "number" => $number);
    }
    $smarty_page->assign("page", $page);
    $content = $smarty_page->fetch("indexPage.tpl");
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>

