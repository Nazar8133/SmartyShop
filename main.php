<?php
session_start();
//define("SMARTI_LIB", "libs/");// Створюємо константу, яка містить шлях до сматрі бібліотеки
//require_once (SMARTI_LIB."Smarty.class.php");// Підключаємо smarti class на основі якого буде створено смарті проект
//$smarty_main=new Smarty();// Створюємо Smarty обєкт для обслуговування (підстановки данних та компіляції) в даному випадку наш обєкт взаємодіє з main.tpl файлом
//require_once ("admin/param.php");
/*$smarty_main->assign("privet", "Hello smarty");// Метод assign виконує підстановку з php в tpl файлта має параметри 1.Посадочне місце в tpl файлі 2.Данні які відправляються
//echo "Привіт";
$smarty_main->assign("opus", "Тут буде опис сайту");
$ocinka=2;
$smarty_main->assign("ocinka", $ocinka);
$pages=array();// Створюємо пустий динамічний масив
for ($i=1; $i<=5; $i++){// Створюємо for щоб він повторювався 5 разів
    $pages[]=array("p"=>$i);// Добавляємо в асіоцативні масиві значення в ключ p
}

$smarty_main->assign("pages", $pages);// Підставляєм масив з php в tpl
*/
//$page="index";
if(isset($page)) {
$query="select metaTitle, metaDiscription, metaKeywords, title, fullContent from settingPage where page='$page'";
$rezult=mysqli_query($dbc, $query) or die("Error query!");
$row=mysqli_fetch_array($rezult);
$smarty_main->assign("metaTitle", $row['metaTitle']);
$smarty_main->assign("metaDiscription", $row['metaDiscription']);
$smarty_main->assign("metaKeywords", $row['metaKeywords']);
$smarty_main->assign("title", $row['title']);
if(isset($fullContent)){
    $smarty_main->assign("fullContent", $fullContent);
}
else{
    $smarty_main->assign("fullContent", $row['fullContent']);
}
$queryBrend="select id, name from brend";
$rezultBrend=mysqli_query($dbc, $queryBrend) or die("Error queryBrend!");
$brend=[];
while ($rowBrend=mysqli_fetch_array($rezultBrend)){
    $brend[]=array("id"=>$rowBrend['id'], "name"=>$rowBrend['name']);
}
$smarty_main->assign("brend", $brend);
//////////////////////////////////////////////////////////////Головне меню///////////////////////////////////////////////////////////////////////////////
$menu=[];
$queryM="select name, page from settingPage order by prior asc";
$rezultM=mysqli_query($dbc, $queryM) or die("Error queryM!");
while ($rowM=mysqli_fetch_array($rezultM)){
    $menu[]=array("name"=>$rowM['name'], "page"=>$rowM['page']);
}
$smarty_main->assign("menu", $menu);
$smarty_main->assign("page", $page);
    $kolvoKorz = 0;
    $smarty_main->assign("kolvoKorz", $kolvoKorz);
if (isset($_SESSION['basket']) && count($_SESSION['basket'])>0){
        foreach ($_SESSION['basket'] as $item)

           $kolvoKorz+= $item['kolvo'];
    $smarty_main->assign("kolvoKorz", $kolvoKorz);
    }
//////////////////////////////////////////////////////////////Кінець меню///////////////////////////////////////////////////////////////////////////////
    $smarty_main->display("main.tpl");// Метод display виконує компіляцію поточного файлу php з указаним файлом tpl і результат компіляції передається браузеру на відображення
}
else{
    header("location: error404.html");
}
?>
