<?php
require_once ("header.php");
if (isset($_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule'], $_SESSION['userId']) && $_SESSION['userRule']==2) {
    require_once ("user.php");
    $smarty_main->assign("title", "Редагування сторінок");
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $smarty_updatePage = new Smarty();
        $smarty_updatePage->assign("id", $_GET['id']);
        $query = "select metaTitle, metaDiscription, metaKeywords, title, fullContent, name, page, prior from settingPage where id={$_GET['id']}";
        //echo $query;
        $rezult = mysqli_query($dbc, $query) or die("Error query!");
        $queryPrior = "select prior from settingPage";
        $rezultPrior = mysqli_query($dbc, $queryPrior) or die("Error queryPrior");
        $numRowsPrior = mysqli_num_rows($rezultPrior);
        while ($row = mysqli_fetch_array($rezult)) {
            $smarty_updatePage->assign("metaTitle", $row['metaTitle']);
            $smarty_updatePage->assign("metaDiscription", $row['metaDiscription']);
            $smarty_updatePage->assign("metaKeywords", $row['metaKeywords']);
            $smarty_updatePage->assign("title", $row['title']);
            $smarty_updatePage->assign("fullContent", $row['fullContent']);
            $smarty_updatePage->assign("name", $row['name']);
            $smarty_updatePage->assign("page", $row['page']);
            $smarty_updatePage->assign("prior", $row['prior']);
            $smarty_updatePage->assign("numRowsPrior", $numRowsPrior);
            $content = $smarty_updatePage->fetch("updatePage.tpl");
        }
    } elseif (isset($_POST['metaTitle'], $_POST['metaDiscription'], $_POST['metaKeywords'], $_POST['title'], $_POST['fullContent'], $_POST['name'], $_POST['page'], $_POST['id'], $_POST['priorOld']) && !empty($_POST['priorOld']) && !empty($_POST['id']) && !empty($_POST['metaTitle']) && !empty($_POST['metaDiscription']) && !empty($_POST['metaKeywords']) && !empty($_POST['title']) && !empty($_POST['fullContent']) && !empty($_POST['name']) && !empty($_POST['page'])) {
        $query1 = "update settingPage set metaTitle='{$_POST['metaTitle']}', metaDiscription='{$_POST['metaDiscription']}', metaKeywords='{$_POST['metaKeywords']}', title='{$_POST['title']}', fullContent='{$_POST['fullContent']}', name='{$_POST['name']}', page='{$_POST['page']}' where id={$_POST['id']}";
        //echo $query1;
        mysqli_query($dbc, $query1) or die("Error query1!");
        if ($_POST['prior'] != $_POST['priorOld']) {
            $queryPrior1 = "update settingPage set prior='{$_POST['priorOld']}' where prior={$_POST['prior']}";
            //echo $queryPrior1;
            mysqli_query($dbc, $queryPrior1) or die("Error queryPrior1");
            $queryPrior2 = "update settingPage set prior='{$_POST['prior']}' where id={$_POST['id']}";
            mysqli_query($dbc, $queryPrior2) or die("Error queryPrior2");
        }
        $content = "Успішно відредаговано!";
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
