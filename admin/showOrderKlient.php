<?php
require_once ("header.php");
if (isset($_SESSION['userId'], $_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule'])){
    require_once ("user.php");
    $smarty_main->assign("title", "Замовлений товар покупця");
    $smarty_showOrderKlient=new Smarty();
    $query="select pib, email, number, relationOrder.kolvo as orderKolvo, metaTitle, price, har, idTovar from buyers inner join relationOrder on buyers.id=relationOrder.idKlient inner join tovar on relationOrder.idTovar=tovar.id where buyers.id='{$_GET['idKlient']}' and relationOrder.idKlient='{$_GET['idKlient']}' and status=1";
    $rezult=mysqli_query($dbc, $query) or die("Error query!");
    $showOrderKlient=[];
    while($row=mysqli_fetch_array($rezult)){
        $query1="select fileName from photo where idTovar='{$row['idTovar']}'";
        $rezult1=mysqli_query($dbc, $query1) or die("Error query1!");
        $row1=mysqli_fetch_array($rezult1);
        $photo=$row1['fileName'];
        if (empty($photo)){
            $photo="noPhoto.png";
        }
        $showOrderKlient[]=array("photo"=>$photo, "orderKolvo"=>$row['orderKolvo'], "metaTitle"=>$row['metaTitle'], "price"=>$row['price'], "har"=>$row['har']);
        $smarty_showOrderKlient->assign("pib", $row['pib']);
        $smarty_showOrderKlient->assign("email", $row['email']);
        $smarty_showOrderKlient->assign("number", $row['number']);
    }
    $smarty_showOrderKlient->assign("showOrderKlient", $showOrderKlient);
    $content=$smarty_showOrderKlient->fetch("showOrderKlient.tpl");
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>