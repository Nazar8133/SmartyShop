<?php
session_start();
require_once ("header.php");
$page="order";
$smarty_order=new Smarty();
    if (isset($_SESSION['basket']) && count($_SESSION['basket']) > 0) {
        if (isset($_POST['btn'])) {
            for ($i = 0; $i < count($_SESSION['basket']); $i++) {
                $nameElement = "kolvo" . $_SESSION['basket'][$i]['id'];
                //echo $nameElement;
                $_SESSION['basket'][$i]['kolvo'] = $_POST[$nameElement];
            }
        }
        $tovar = [];
        $zahKilk = 0;
        foreach ($_SESSION['basket'] as $item) {
            $kilk = $item['price'] * $item['kolvo'];
            $zahKilk += $kilk;
            $query = "select kolvo from tovar where id={$item['id']}";
            $rezult = mysqli_query($dbc, $query) or die("Error query!");
            $row = mysqli_fetch_array($rezult);
            $skladKilk = $row['kolvo'];
            $tovar[] = array("skladKilk" => $skladKilk, "photo" => $item['photo'], "metaTitle" => $item['metaTitle'], "price" => $item['price'], "kolvo" => $item['kolvo'], "id" => $item['id'], "kilk" => $kilk);
        }
        $smarty_order->assign("zahKilk", $zahKilk);
        $smarty_order->assign("tovar", $tovar);
        $fullContent=$smarty_order->fetch("order.tpl");
    }
    else{
        $fullContent="Покищо тут нічого немає(<br><a href='catalog.php'>Назад</a>";
    }

    require_once("main.php");
?>
