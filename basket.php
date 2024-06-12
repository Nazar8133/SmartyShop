<?php
session_start();
if (isset($_GET['id'], $_GET['mode']) && !empty($_GET['id']) && $_GET['mode']=="add"){
    $egzist=false;
    if (!isset($_SESSION['basket'])){
        $_SESSION['basket']=array();
    }
    if (count($_SESSION['basket'])>0){
        for ($i=0; $i<count($_SESSION['basket']); $i++){
            if ($_SESSION['basket'][$i]['id']==$_GET['id']){
                $_SESSION['basket'][$i]['kolvo']++;
                $egzist=true;
                break;
            }
        }
    }
    if (!$egzist){
        require_once ("admin/param.php");
        $query="select fileName , metaTitle, price from tovar left join photo on tovar.id=photo.idTovar where tovar.id={$_GET['id']} and (photo.status=1 or photo.status is Null)";
        $rezult=mysqli_query($dbc, $query) or die("Error query!");
        $row=mysqli_fetch_array($rezult);
        $photo=$row['fileName'];
        if(empty($photo)){
            $photo="noPhoto.png";
        }
        $_SESSION['basket'][]=array("id"=>$_GET['id'], "photo"=>$photo, "metaTitle"=>$row['metaTitle'], "price"=>$row['price'], "kolvo"=>1);
    }
}
if (isset($_GET['mode'], $_SESSION['basket']) && $_GET['mode']=="clear"){
    unset($_SESSION['basket']);
    $_SESSION['basket']=array();
}
if (isset($_GET['mode'], $_SESSION['basket'], $_GET['id']) && !empty($_GET['id']) && $_GET['mode']=="del"){
    if (count($_SESSION['basket'])>0){
        for ($i=0; $i<count($_SESSION['basket']); $i++){
            if ($_SESSION['basket'][$i]['id']==$_GET['id']){
                unset($_SESSION['basket'][$i]);
                break;
            }
        }
        $items=[];
        foreach ($_SESSION['basket'] as $item){
            if (!empty($item)){
                array_push($items, $item);
            }
        }
        unset($_SESSION['basket']);
        $_SESSION['basket']=array();
        $_SESSION['basket']=$items;
        unset($items);
    }
}
if (isset($_SESSION['basket'], $_GET['script']) && count($_SESSION['basket'])>0 && $_GET['script']=="order"){
    header("location:order.php");
}
else {
    if (isset($_GET['page'], $_GET['idBrend']) && !empty($_GET['page']) && !empty($_GET['idBrend'])){
    header("location:catalog.php?page={$_GET['page']}&idBrend={$_GET['idBrend']}");
    }
    elseif (isset($_GET['page'], $_GET['searchPriceOt'], $_GET['searchPriceDo'], $_GET['searchTovar'])){
        header("location:search.php?page={$_GET['page']}&searchPriceOt={$_GET['searchPriceOt']}&searchPriceDo={$_GET['searchPriceDo']}&searchTovar={$_GET['searchTovar']}");
    }
    elseif (isset($_GET['page']) && !empty($_GET['page'])) {
        header("location:catalog.php?page={$_GET['page']}");
    }
    elseif (isset($_GET['id']) && !empty($_GET['id'])){
        header("location:details.php?id={$_GET['id']}");
    }
    else {
        header("location:catalog.php");
    }
}
?>
