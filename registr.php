<?php
session_start();
require_once ("header.php");
$page="catalog";
$smarty_registr=new Smarty();
if (!isset($_POST['knopka'])){
    $fullContent=$smarty_registr->fetch("order2.tpl");
}
elseif (isset($_POST['knopka'], $_POST['login'], $_POST['pib'], $_POST['password1'], $_POST['password2'], $_POST['number'], $_POST['email'], $_POST['adres'], $_POST['koment']) && !empty($_POST['koment']) && !empty($_POST['login']) && !empty($_POST['pib']) && !empty($_POST['password1']) && !empty($_POST['password2']) && !empty($_POST['number']) && !empty($_POST['email']) && !empty($_POST['adres']) && $_POST['password1']==$_POST['password2']){
    $query="select id from buyers where email='{$_POST['email']}'";
    $rezult=mysqli_query($dbc, $query) or die("Error query!");
    if (mysqli_num_rows($rezult) > 0) {
        $fullContent = "<h3 style='color: red'>Користувач з таким email вже існує</h3><br><a href='order2.php?login={$_POST['login']}&pib={$_POST['pib']}&number={$_POST['number']}&adres={$_POST['adres']}&koment={$_POST['koment']}'>Спробувати знову</a>";
    }
    else {
        $queryRegistr = "insert into buyers(login, pib, password, number, email, adres) values ('{$_POST['login']}', '{$_POST['pib']}', sha1('{$_POST['password1']}'), '{$_POST['number']}', '{$_POST['email']}', '{$_POST['adres']}')";
        //echo "$queryRegistr";
        mysqli_query($dbc, $queryRegistr) or die("Error queryRegistr!");
        $idKlient=mysqli_insert_id($dbc);
        for ($i=0; $i<count($_SESSION['basket']); $i++){
            $query1="insert into relationOrder(idKlient, idTovar, kolvo, dataOrder, koment) values ('$idKlient', '{$_SESSION['basket'][$i]['id']}', '{$_SESSION['basket'][$i]['kolvo']}', now(), '{$_POST['koment']}')";
            mysqli_query($dbc, $query1) or die("Error query1!");
        }
        $fullContent="Ваше замовлення прийнято, наш менеджер з вами звяжеться<br><a href='catalog.php'>Назад</a>";
        unset($_SESSION['basket']);
        $_SESSION['basket']=array();
    }
}
else{
    $fullContent="Недостатньо данних для оформлення замовлення!<br><a href='order2.php'>Назад</a>";
    //$smarty_registr->assign("bb", $bb);
}

require_once ("main.php");
?>
