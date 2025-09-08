<?php
session_start();
require_once ("header.php");
$page="catalog";
$smarty_details=new Smarty();
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $query = "select tovar.id, metaTitle, price, kolvo, photo.fileName as photo, har, data from tovar left join photo on tovar.id=photo.idTovar where tovar.id={$_GET['id']} and (photo.status=1 or photo.status is NULL)";
    $rezult=mysqli_query($dbc, $query) or die("Error queryTovar!");
    $row = mysqli_fetch_array($rezult);
    $photo = $row['photo'];
    if (empty($photo)) {
        $photo = "noPhoto.png";
    }
    $knopka = "<a class='btn btn-large btn-primary pull-right' href='basket.php?id={$row['id']}&mode=add'> Додати до корзини <i class=' icon-shopping-cart'></i></a>";
    $tovar = ["metaTitle" => $row['metaTitle'], "price" => $row['price'], "kolvo" => $row['kolvo'], "har" => $row['har'], "data" => $row['data'], "photo"=>$photo, "knopka"=>$knopka];
    $smarty_details->assign("tovar", $tovar);
}
$fullContent=$smarty_details->fetch("details.tpl");
require_once ("main.php");
?>
