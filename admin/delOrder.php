<?php
    require_once ("header.php");
    if (isset($_GET['idKlient'], $_GET['data']) && !empty($_GET['idKlient']) && !empty($_GET['data'])){
        $query="delete from relationOrder where idKlient='{$_GET['idKlient']}' and dataOrder='{$_GET['data']}'";
        mysqli_query($dbc, $query) or die("Error query!");
    }
    header("location:adminOrder.php");
?>
