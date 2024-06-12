<?php
require_once ("header.php");
if (isset($_SESSION['userId'], $_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule'])) {
    require_once("user.php");
    $smarty_main->assign("title", "Інформація про покупців");
    $smarty_infoKlient=new Smarty();
    $query = "select pib, sum(relationOrder.kolvo) as kolvoKlient, buyers.id as idKlient from buyers inner join relationOrder on buyers.id=relationOrder.idKlient where status=1 GROUP BY buyers.id, pib order by kolvoKlient desc";
    echo $query;
    $rezult = mysqli_query($dbc, $query) or die("Error query!");
    $infoKlient=[];
    $number=0;
    while ($row=mysqli_fetch_array($rezult)){
        $number++;
        $infoKlient[]=array("number"=>$number, "pib"=>$row['pib'], "kolvoKlient"=>$row['kolvoKlient'], "idKlient"=>$row['idKlient']);
    }
    $smarty_infoKlient->assign("infoKlient", $infoKlient);
    $content=$smarty_infoKlient->fetch("infoKlient.tpl");
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>
