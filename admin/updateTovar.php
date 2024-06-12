<?php
require_once ("header.php");
if (isset($_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule'], $_SESSION['userId'])) {
    require_once ("user.php");
    $smarty_main->assign("title", "Редагування товару");
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $smarty_updateTOvar = new Smarty();
        $smarty_updateTOvar->assign("id", $_GET['id']);
        $query = "select metaTitle, metaDiscription, metaKeywords, title, price, kolvo, har, data from tovar where id={$_GET['id']}";
        $rezult = mysqli_query($dbc, $query) or die("Error query!");
        $row = mysqli_fetch_array($rezult);
        $smarty_updateTOvar->assign("metaTitle", $row['metaTitle']);
        $smarty_updateTOvar->assign("metaDiscription", $row['metaDiscription']);
        $smarty_updateTOvar->assign("metaKeywords", $row['metaKeywords']);
        $smarty_updateTOvar->assign("title", $row['title']);
        $smarty_updateTOvar->assign("price", $row['price']);
        $smarty_updateTOvar->assign("kolvo", $row['kolvo']);
        $smarty_updateTOvar->assign("har", $row['har']);
        $smarty_updateTOvar->assign("data", $row['data']);
        $queryPhoto3 = "select fileName, status, id, idTovar from photo where idTovar={$_GET['id']}";
        $rezultPhoto3 = mysqli_query($dbc, $queryPhoto3) or die("Error queryPhoto3");
        $photo = [];
        while ($row = mysqli_fetch_array($rezultPhoto3)) {
            $name = $row['fileName'];
            if (empty($name)) {
                $name = "nophoto.png";
            }
            $status = $row['status'];
            $id = $row['id'];
            $idTovar1 = $row['idTovar'];
            $photo[] = array("name" => $name, "status" => $status, "id" => $id, "idTovar" => $idTovar1);
        }
        $smarty_updateTOvar->assign("photo", $photo);
        $content = $smarty_updateTOvar->fetch("updateTovar.tpl");
    } elseif (isset($_POST['metaTitle'], $_POST['metaDiscription'], $_POST['metaKeywords'], $_POST['title'], $_POST['price'], $_POST['kolvo'], $_POST['har'], $_POST['data'], $_POST['knopka'], $_POST['id'], $_POST['status']) && !empty($_POST['metaTitle']) && !empty($_POST['metaDiscription']) && !empty($_POST['metaKeywords']) && !empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['kolvo']) && !empty($_POST['har']) && !empty($_POST['data']) && !empty($_POST['id']) && !empty($_POST['status'])) {
        $idTovar = $_POST['id'];
        $queryT = "update tovar set metaTitle='".MyProtecte($dbc, $_POST['metaTitle'])."', metaDiscription='{$_POST['metaDiscription']}', metaKeywords='".MyProtecte($dbc, $_POST['metaKeywords'])."', title='".MyProtecte($dbc, $_POST['title'])."', price='".MyProtecte($dbc, $_POST['price'])."', kolvo='".MyProtecte($dbc, $_POST['kolvo'])."', har='".MyProtecte($dbc, $_POST['har'])."', data='".MyProtecte($dbc, $_POST['data'])."' where id={$_POST['id']}";
        //echo $queryT;
        mysqli_query($dbc, $queryT) or die("Error queryT!");

        if (isset($_FILES['photo']['name'])) {
            for ($i = 0; $i < count($_FILES['photo']['name']); $i++) {
                if (isset($_FILES['photo']['name'][$i]) && $_FILES['photo']['error'][$i] == 0 && $_FILES['photo']['size'][$i] > 0) {
                    $fileNameTMP = $_FILES['photo']['tmp_name'][$i];
                    $fileName = time() . $_FILES['photo']['name'][$i];
                    move_uploaded_file($fileNameTMP, "../images/$fileName");
                    $queryPhoto2 = "select id from photo where idTovar=$idTovar";
                    $rezultPhoto2 = mysqli_query($dbc, $queryPhoto2) or die("Error queryPhoto2");
                    if (mysqli_num_rows($rezultPhoto2) > 0) {
                        $status = 0;
                    } else {
                        if ($i == 0) {
                            $status = 1;
                        } else {
                            $status = 0;
                        }
                    }
                    $queryPhoto = "insert into photo(fileName, idTovar, status) values ('$fileName', '$idTovar', '$status')";
                    mysqli_query($dbc, $queryPhoto) or die("Error queryPhoto!");
                }
            }
        }
        $queryStatus = "select status, idTovar from photo where id={$_POST['status']}";//61
        $rezultStatus = mysqli_query($dbc, $queryStatus) or die("Error queryStatus!");
        $rowStatus = mysqli_fetch_array($rezultStatus);
        $idTovarStatus = $rowStatus['idTovar'];//34
        $queryStatus2 = "update photo set status=0 where idTovar=$idTovarStatus";//34
        mysqli_query($dbc, $queryStatus2) or die("Error queryStatus2");
        $queryStatus3 = "update photo set status=1 where id={$_POST['status']}";//61
        mysqli_query($dbc, $queryStatus3) or die("Error queryStatus3");
        $content = "Товар успішно відредаговано!";
    } else {
        $content = "Невдалося відредагувати товар!";
    }
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>
