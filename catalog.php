<?php
session_start();
require_once ("header.php");
$page="catalog";
$smarty_catalog=new Smarty();
$queryTovar="select tovar.id, metaTitle, price, kolvo, photo.fileName as photo from tovar left join photo on tovar.id=photo.idTovar ";
if (isset($_GET['idBrend']) && !empty($_GET['idBrend'])){
    $smarty_catalog->assign("idBrend", $_GET['idBrend']);
    $queryTovar .= " where idBrend={$_GET['idBrend']} and (photo.status=1 or photo.status is NULL)";
}
else{
    $queryTovar.=" where (photo.status=1 or photo.status is NULL)";
}
if (isset($_GET['sort'])){
    $sort=$_GET['sort'];
    switch ($sort){
        case ("asc"):
        $sort="desc";
        break;
        case ("desc"):
            $sort="asc";
            break;
        default:
            $sort="asc";
            break;
    }
    $queryTovar.=" order by price $sort";
    $smarty_catalog->assign("sort", $sort);
}
else{
    $smarty_catalog->assign("sort", "asc");
}
if(isset($_GET['sort2'])){
    $sort2=$_GET['sort2'];
    switch ($sort2){
        case ("asc"):
            $sort2="desc";
            break;
        case ("desc"):
            $sort2="asc";
            break;
        default:
            $sort2="asc";
            break;
    }
    $queryTovar.=" order by metaTitle $sort2";
    $smarty_catalog->assign("sort2", $sort2);
}
else{
    $smarty_catalog->assign("sort2", "asc");
}
if(isset($sort) && !empty($sort) && $sort=="asc"){
    $sort1="desc";
    $smarty_catalog->assign("sort1", $sort1);
}
elseif (isset($sort) && !empty($sort) && $sort=="desc"){
    $sort1="asc";
    $smarty_catalog->assign("sort1", $sort1);
}
if(isset($sort2) && !empty($sort2) && $sort2=="asc"){
    $sort12="desc";
    $smarty_catalog->assign("sort12", $sort12);
}
elseif (isset($sort2) && !empty($sort2) && $sort2=="desc"){
    $sort12="asc";
    $smarty_catalog->assign("sort12", $sort12);
}
$zapus=6;
if (isset($_GET['id']) && !empty($_GET['id'])){
    $idBrend=$_GET['id'];
    $queryLustalka="select id from tovar where idBrend=$idBrend";
}
elseif (isset($_GET['idBrend']) && !empty($_GET['idBrend'])){
    $idBrend=$_GET['idBrend'];
    $queryLustalka="select id from tovar where idBrend=$idBrend";
}
else{
    $queryLustalka="select id from tovar";
}
$rezultLustalka=mysqli_query($dbc, $queryLustalka) or die("Error queryLustalka");
$cautRows=mysqli_num_rows($rezultLustalka);
$pages=ceil($cautRows/$zapus);
if(isset($_GET['page'])){
    $activePage=$_GET['page'];
}
else{
    $activePage=1;
}
$smarty_catalog->assign("activePage", $activePage);
$smarty_catalog->assign("pages", $pages);
$skip=($activePage-1)*$zapus;
$queryTovar.=" limit $skip, $zapus";
//echo $queryTovar;
$rezultTovar=mysqli_query($dbc, $queryTovar) or die("Error queryTovar!");
$rez=mysqli_num_rows($rezultTovar);
if($rez>0) {
    $smarty_catalog->assign("rez", 1);
    $tovar = [];
    while ($row = mysqli_fetch_array($rezultTovar)) {
        $photo = $row['photo'];
        if (empty($photo)) {
            $photo = "noPhoto.png";
        }
        $kolvo=$row['kolvo'];
        if ($kolvo==0){
            $kolvo="Немає в наявності!";
        }
        elseif (isset($_GET['idBrend']) && !empty($_GET['idBrend'])){
            $kolvo="<a class='btn' href='basket.php?id={$row['id']}&mode=add&page=$activePage&idBrend={$_GET['idBrend']}'>Додати до <i class='icon-shopping-cart'></i></a>";
        }
        else{
            $kolvo="<a class='btn' href='basket.php?id={$row['id']}&mode=add&page=$activePage'>Додати до <i class='icon-shopping-cart'></i></a>";
        }
        $tovar[] = array("id"=>$row['id'], "metaTitle" => $row['metaTitle'], "price" => $row['price'], "kolvo" => $kolvo, "photo" => $photo);
    }
}
else{
    $smarty_catalog->assign("rez", 2);
}
$smarty_catalog->assign("tovar", $tovar);


$fullContent=$smarty_catalog->fetch("catalog.tpl");
//$smarty_main->assign("fullContent", $fullContent);
//$smarty_main->display("main.tpl");
require_once ("main.php");
?>
