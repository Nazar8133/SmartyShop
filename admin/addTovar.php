<?php
require_once ("header.php");
if(isset($_SESSION['userId'], $_SESSION['userName'], $_SESSION['userAvatar'], $_SESSION['userRule'])) {
    require_once ("user.php");
    $smarty_main->assign("title", "Додати товар");
    if (!isset($_POST['knopka'])) {
        $smarty_addTovar = new Smarty();
        $brend = [];
        $query = "select id, name from brend";
        $rezult = mysqli_query($dbc, $query) or die("Error query!");
        while ($row = mysqli_fetch_array($rezult)) {
            $id = $row['id'];
            $name = $row['name'];
            $brend[] = array("id" => $id, "name" => $name);
        }
        $smarty_addTovar->assign("brend", $brend);
        $content = $smarty_addTovar->fetch("addTovar.tpl");
    } elseif (isset($_POST['metaTitle'], $_POST['metaDiscription'], $_POST['metaKeywords'], $_POST['title'], $_POST['price'], $_POST['kolvo'], $_POST['har'], $_POST['data'], $_POST['idBrend'], $_POST['knopka']) && !empty($_POST['metaTitle']) && !empty($_POST['metaDiscription']) && !empty($_POST['metaKeywords']) && !empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['kolvo']) && !empty($_POST['har']) && !empty($_POST['data'])) {
        $query = "insert into tovar(metaTitle, metaDiscription, metaKeywords, title, price, idBrend, kolvo, har, data) values ('" . MyProtecte($dbc, $_POST['metaTitle']) . "', '" . MyProtecte($dbc, $_POST['metaDiscription']) . "', '" . MyProtecte($dbc, $_POST['metaKeywords']) . "', '" . MyProtecte($dbc, $_POST['title']) . "', '" . MyProtecte($dbc, $_POST['price']) . "', '" . MyProtecte($dbc, $_POST['idBrend']) . "', '" . MyProtecte($dbc, $_POST['kolvo']) . "', '" . MyProtecte($dbc, $_POST['har']) . "', '" . MyProtecte($dbc, $_POST['data']) . "')";
        //echo $query;
        mysqli_query($dbc, $query) or die("Error query!");
        $idTovar = mysqli_insert_id($dbc);
        if (isset($_FILES['photo']['name'])) {
            for ($i = 0; $i < count($_FILES['photo']['name']); $i++) {
                if (isset($_FILES['photo']['name'][$i]) && $_FILES['photo']['error'][$i] == 0 && $_FILES['photo']['size'][$i] > 0) {
                    $fileNameTMP = $_FILES['photo']['tmp_name'][$i];
                    $fileName = time() . $_FILES['photo']['name'][$i];
                    move_uploaded_file($fileNameTMP, "../images/$fileName");
                    if ($i == 0) {
                        $status = 1;
                    } else {
                        $status = 0;
                    }
                    $queryPhoto = "insert into photo(fileName, idTovar, status) values ('$fileName', '$idTovar', '$status')";
                    mysqli_query($dbc, $queryPhoto) or die("Error queryPhoto");
                }
            }
        }
        $content = "Товар успішно додано!";
    } else {
        $content = "Недостатньо данних для додання товару!";
    }

    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
else{
    header("location: ../error404.html");
}
?>
