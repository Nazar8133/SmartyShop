<?php
require_once ("header.php");
if (isset($_GET['idKlient'], $_GET['dataOrder']) && !empty($_GET['idKlient']) && !empty($_GET['dataOrder'])){
    $query="update relationOrder set status=0 where idKlient='{$_GET['idKlient']}' and dataOrder='{$_GET['dataOrder']}'";
    mysqli_query($dbc, $query) or die("Error query!");
    $query1="select idTovar, kolvo from relationOrder where idKlient='{$_GET['idKlient']}' and dataOrder='{$_GET['dataOrder']}'";
    $rezult=mysqli_query($dbc, $query1) or die("Error query1");
    while ($row=mysqli_fetch_array($rezult)){
        $idTovar=$row['idTovar'];
        $kolvo=$row['kolvo'];
        $query2="update tovar set kolvo=kolvo+$kolvo where id=$idTovar";
        mysqli_query($dbc, $query2) or die("Error query2!");
    }
}
header("location:orderArchiv.php");
?>
