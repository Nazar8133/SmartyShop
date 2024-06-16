<?php
session_start();
require_once ("header.php");
$page="catalog";
$smarty_order2=new Smarty();
if (isset($_SESSION['basket']) && count($_SESSION['basket'])>0){
    $zahVart=0;
    $number=0;
    $zakaz=[];
    foreach ($_SESSION['basket'] as $item){
        $number++;
        $vart=$item['price']*$item['kolvo'];
        $zahVart+=$vart;
        $zakaz[]=array("number"=>$number, "photo"=>$item['photo'], "metaTitle"=>$item['metaTitle'], "price"=>$item['price'], "kolvo"=>$item['kolvo'], "vart"=>$vart);
    }
    $smarty_order2->assign("zakaz", $zakaz);
    $smarty_order2->assign("zahVart", $zahVart);
    if (isset($_GET['login'], $_GET['pib'], $_GET['number'], $_GET['adres'], $_GET['koment'])){
        $smarty_order2->assign("login", $_GET['login']);
        $smarty_order2->assign("pib", $_GET['pib']);
        $smarty_order2->assign("number", $_GET['number']);
        $smarty_order2->assign("adres", $_GET['adres']);
        $smarty_order2->assign("koment", $_GET['koment']);
    }
}
$fullContent=$smarty_order2->fetch("order2.tpl");
require_once ("main.php");
?>
