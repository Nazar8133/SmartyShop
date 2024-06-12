<?php
require_once ("header.php");
$page="search";
$smarty_search=new Smarty();
$query="select tovar.id, metaTitle, price, kolvo, photo.fileName as photo from tovar left join photo on tovar.id=photo.idTovar";
if(isset($_POST['searchPriceOt']) && !empty($_POST['searchPriceOt'])){
    $searchPriceOt=$_POST['searchPriceOt'];
    $smarty_search->assign("searchPriceOt", $searchPriceOt);
}
elseif (isset($_GET['searchPriceOt']) && !empty($_GET['searchPriceOt'])){
    $searchPriceOt=$_GET['searchPriceOt'];
    $smarty_search->assign("searchPriceOt", $searchPriceOt);
}
else{
    $searchPriceOt=0;
}
if (isset($_POST['searchPriceDo']) && !empty($_POST['searchPriceDo'])){
    $searchPriceDo=$_POST['searchPriceDo'];
    $smarty_search->assign("searchPriceDo", $searchPriceDo);
}
elseif (isset($_GET['searchPriceDo']) && !empty($_GET['searchPriceDo'])){
    $searchPriceDo=$_GET['searchPriceDo'];
    $smarty_search->assign("searchPriceDo", $searchPriceDo);
}
else{
    $queryPriceDo="select MAX(price) as priceDo from tovar";
    $rezultPriceDo=mysqli_query($dbc, $queryPriceDo) or die("Error queryPriceDo");
    $rowPriceDo=mysqli_fetch_array($rezultPriceDo);
    $searchPriceDo=$rowPriceDo['priceDo'];
}
$query.=" where (photo.status=1 or photo.status is NULL) and price>=$searchPriceOt and price<=$searchPriceDo";

if (isset($_POST['searchTovar']) && !empty($_POST['searchTovar'])){
    $search1=$_POST['searchTovar'];
    $smarty_search->assign("searchTovar", $search1);
    $search=str_replace(",", " ", $search1);
    $world=explode(" ", $search);
}
elseif (isset($_GET['searchTovar']) && !empty($_GET['searchTovar'])){
    $search1=$_GET['searchTovar'];
    $smarty_search->assign("searchTovar", $search1);
    $search=str_replace(",", " ", $search1);
    $world=explode(" ", $search);
}

$noEmptyWorlds=[];
if (isset($world) && count($world)>0){
    foreach ($world as $item)
        if (!empty($item)){
            $noEmptyWorlds[]=$item;
        }
}
$rezultWorld=[];
if (count($noEmptyWorlds)>0){
    foreach ($noEmptyWorlds as $tmp)
        $rezultWorld[]=" metaTitle like '%{$tmp}%'";
}
$whereRezult=implode(" or ", $rezultWorld);
if (!empty($whereRezult)){
    $smarty_search->assign("whereRezult", $whereRezult);
    $query.=" and ($whereRezult)";
}
$zapus=6;
$queryLustalka="select tovar.id from tovar left join photo on tovar.id=photo.idTovar where (photo.status=1 or photo.status is NULL) and price>=$searchPriceOt and price<=$searchPriceDo";
if (!empty($whereRezult)){
    $queryLustalka.=" and ($whereRezult)";
}
//echo $queryLustalka;
$rezultLustalka=mysqli_query($dbc, $queryLustalka) or die("Error queryLustalka!");
$cauntRows=mysqli_num_rows($rezultLustalka);
$pages=ceil($cauntRows/$zapus);
if (isset($_GET['page'])){
    $activePage=$_GET['page'];
}
else{
    $activePage=1;
}
$smarty_search->assign("activePage", $activePage);
$smarty_search->assign("pages", $pages);
$skip=($activePage-1)*$zapus;
$query.=" limit $skip, $zapus";
$rezult=mysqli_query($dbc, $query) or die("Error query!");

$tovar=[];
while ($row=mysqli_fetch_array($rezult)){
    $photo = $row['photo'];
    if (empty($photo)) {
        $photo = "noPhoto.png";
    }
    $kolvo=$row['kolvo'];
    if ($kolvo==0){
        $kolvo="Немає в наявності!";
    }
    else{
        $kolvo="<a class='btn' href='basket.php?id={$row['id']}&mode=add&page=$activePage&searchPriceOt=$searchPriceOt&searchPriceDo=$searchPriceDo&searchTovar=$search1'>Додати до <i class='icon-shopping-cart'></i></a>";
    }
    $tovar[]=array("metaTitle"=>$row['metaTitle'], "price"=>$row['price'], "kolvo"=>$kolvo, "photo"=>$photo);
}
$smarty_search->assign("tovar", $tovar);
$fullContent=$smarty_search->fetch("search2.tpl");

require_once ("main.php");
?>
