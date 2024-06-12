<?php
require_once ("header.php");
$smarty_main->assign("title", "Видалення товару");
if(isset($_GET['id'], $_GET['name']) && !empty($_GET['id']) && !empty($_GET['name'])){
    $smarty_delTovar=new Smarty();
    $smarty_delTovar->assign("name", $_GET['name']);
    $smarty_delTovar->assign("id", $_GET['id']);
    $content=$smarty_delTovar->fetch("delTovar.tpl");
}
elseif (isset($_POST['knopka'], $_POST['del'], $_POST['id']) && !empty($_POST['id']) && $_POST['del']=="Yes"){
    $queryPhoto="select fileName from photo where idTovar={$_POST['id']}";
    $rezultPhoto=mysqli_query($dbc, $queryPhoto) or die("Error queryPhoto!");
    while($row=mysqli_fetch_array($rezultPhoto)) {
        $photo = $row['fileName'];
        @unlink("../images/$photo");
    }
    //$kolvo=mysqli_num_rows($rezultPhoto);
   // for($i=0; $i<$kolvo; $i++) {
        $queryP = "delete from photo where idTovar={$_POST['id']}";
        mysqli_query($dbc, $queryP) or die("Error queryP!");
   // }
    $queryB="delete from tovar where id={$_POST['id']}";
    mysqli_query($dbc, $queryB) or die("Error queryB!");
    $content="Видалення успішне!";
}
else{
    $content="Товар невдалося видалити!";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
?>
