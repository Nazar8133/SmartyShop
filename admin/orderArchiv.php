<?php
require_once ("header.php");
if (isset($_SESSION['userName'], $_SESSION['userRule'], $_SESSION['userId'], $_SESSION['userAvatar'])){
    require_once ("user.php");
    $smarty_main->assign("title", "Архів виконаних замовлень");
    $smarty_orderArchiv=new Smarty();
    $query="select pib, number, email, adres, metaTitle, price, relationOrder.kolvo as orderKolvo, dataOrder, koment, idKlient, idTovar from buyers inner join relationOrder on buyers.id=relationOrder.idKlient inner join tovar on relationOrder.idTovar=tovar.id where relationOrder.status=1 order by dataOrder DESC, idKlient ASC";
    $rezult=mysqli_query($dbc, $query) or die("Error query!");
    $number=1;
    $orderArchiv=[];
    $chengKlient=0;
    $chengData=0;
    while ($row=mysqli_fetch_array($rezult)){
    $query1="select fileName from photo where idTovar='{$row['idTovar']}' and status=1";
    $rezult1=mysqli_query($dbc, $query1) or die("Error query1!");
    $row1=mysqli_fetch_array($rezult1);
    $photo=$row1['fileName'];
    if (empty($photo)){
        $photo="noPhoto.png";
    }
    if ($row['idKlient']!=$chengKlient || $row['dataOrder']!=$chengData){
        $query2="select idKlient from relationOrder where idKlient='{$row['idKlient']}' and dataOrder='{$row['dataOrder']}' and status=1";
        $rezult2=mysqli_query($dbc, $query2) or die("Error query2!");
        $klientRows=mysqli_num_rows($rezult2);
        $rowsCount=1;
        $ollOrder=0;
    }
    $vartist=$row['price']*$row['orderKolvo'];
    $ollOrder+=$vartist;
    $orderArchiv[]=array("idKlient"=>$row['idKlient'], "number"=>$number, "pib"=>$row['pib'], "nomer"=>$row['number'], "email"=>$row['email'], "metaTitle"=>$row['metaTitle'], "price"=>$row['price'], "orderKolvo"=>$row['orderKolvo'], "dataOrder"=>$row['dataOrder'], "koment"=>$row['koment'], "vartist"=>$vartist, "ollOrder"=>$ollOrder, "klientRows"=>$klientRows, "rowsCount"=>$rowsCount, "photo"=>$photo, "chengData"=>$chengData, "chengKlient"=>$chengKlient);
    if ($row['idKlient']!=$chengKlient || $row['dataOrder']!=$chengData){
    $chengKlient=$row['idKlient'];
    $chengData=$row['dataOrder'];
    $number++;
    }
        $rowsCount++;
    }
    $smarty_orderArchiv->assign("orderArchiv", $orderArchiv);
    $content=$smarty_orderArchiv->fetch("orderArchiv.tpl");
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>
