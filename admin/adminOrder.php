<?php
require_once ("header.php");
if(isset($_SESSION['userId'], $_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule'])) {
    require_once("user.php");
    $smarty_main->assign("title", "Управління замовленнями");
    $smarty_adminOrder = new Smarty();
    $query = "select metaTitle, price, idKlient, tovar.id as idTov, relationOrder.kolvo as kolvoOrder, koment, dataOrder, pib, number, email, adres from buyers inner join relationOrder on buyers.id=relationOrder.idKlient inner join tovar on relationOrder.idTovar=tovar.id where relationOrder.status=0 order by relationOrder.dataOrder DESC, relationOrder.idKlient ASC";
    echo $query;
    $rezult = mysqli_query($dbc, $query) or die("Error query!");
    $adminOrder = [];
    $number = 1;
    $chengKlient = 0;
    $chengData=0;
    $ollOrder = 0;
    $rowsCount = 1;
    while ($row = mysqli_fetch_array($rezult)) {
        $idKlient = $row['idKlient'];
        $queryPhoto="select fileName from photo where idTovar='{$row['idTov']}' and status=1";
        $rezultPhoto=mysqli_query($dbc, $queryPhoto) or die("Error queryPhoto!");
        $rowPhoto=mysqli_fetch_array($rezultPhoto);
        $photo=$rowPhoto['fileName'];
        if (empty($photo)) {
            $photo = "noPhoto.png";
        }
        if ($idKlient!=$chengKlient || $row['dataOrder']!=$chengData) {
            $query1 = "select idTovar from relationOrder where idKlient=$idKlient and dataOrder='{$row['dataOrder']}' and status=0";
            //echo $query1;
            $rezult1 = mysqli_query($dbc, $query1) or die("Error query1!");
            $klientRows = mysqli_num_rows($rezult1);
            $rowsCount=1;
            $ollOrder=0;
        }
        $vartist = $row['price'] * $row['kolvoOrder'];
        $ollOrder+=$vartist;
        //echo $klientRows."===".$rowsCount;
        $adminOrder[] = array("chengData"=>$chengData, "number" => $number, "metaTitle" => $row['metaTitle'], "price" => $row['price'], "photo" => $photo, "kolvoOrder" => $row['kolvoOrder'], "koment" => $row['koment'], "dataOrder" => $row['dataOrder'], "pib" => $row['pib'], "telefon" => $row['number'], "email" => $row['email'], "adres" => $row['adres'], "klientRows" => $klientRows, "vartist" => $vartist, "ollOrder"=>$ollOrder, "rowsCount"=>$rowsCount, "chengKlient"=>$chengKlient, "idKlient"=>$idKlient);
        if ($idKlient!=$chengKlient || $row['dataOrder']!=$chengData){
            $chengKlient=$idKlient;
            $chengData=$row['dataOrder'];
            $number++;
        }

        $rowsCount++;
    }
    $smarty_adminOrder->assign("adminOrder", $adminOrder);
    //echo "<br>";
    //print_r($adminOrder);
    $content = $smarty_adminOrder->fetch("adminOrder.tpl");
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>
