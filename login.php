<?php
session_start();
require_once ("header.php");
$page="login";
$smarty_login=new Smarty();
if (!isset($_POST['knopka'])){
    $fullContent=$smarty_login->fetch("order2.tpl");
}
elseif (isset($_POST['knopka'], $_POST['login'], $_POST['password'], $_POST['koment']) && !empty($_POST['login']) && !empty($_POST['password'])){
    $query="select id from buyers where login='{$_POST['login']}'";
    $rezult=mysqli_query($dbc, $query) or die("Error query!");
    $row=mysqli_fetch_array($rezult);
    $id=$row['id'];
    if (mysqli_num_rows($rezult)<0){
        $fullContent="Користувача з таким login неіснує! Будь-ласка пройдіть реєстрацію.<br><a href='order2.php'>Назад</a>";
    }
    else{
        for ($i=0; $i<count($_SESSION['basket']); $i++){
            $queryLogin="insert into relationOrder(idKlient, idTovar, kolvo, dataOrder, koment) values ('$id', '{$_SESSION['basket'][$i]['id']}', '{$_SESSION['basket'][$i]['kolvo']}', now(), '{$_POST['koment']}')";
            //echo $queryLogin;
            mysqli_query($dbc, $queryLogin) or die("Error queryLogin!");

        }
        $fullContent="Ваше замовлення прийнято, наш менеджер з вами звяжеться<br><a href='catalog.php'>Назад</a>";
        unset($_SESSION['basket']);
        $_SESSION['basket']=array();
    }
}
else{
    $fullContent="Недостатньо данних для входу в аккаунт!<br><a href='order2.php'>Назад</a>";
}
require_once ("main.php");
?>
