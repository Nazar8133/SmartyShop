<?php
$dbc=@mysqli_connect("localhost", "root", "", "smartiShop") or die("Error connect!");
function MyProtecte($link, $data){
    return mysqli_real_escape_string($link, trim($data));
}
?>
