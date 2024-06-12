<?php
/* Smarty version 4.3.1, created on 2023-07-25 13:52:45
  from 'C:\OSPanel\domains\smartiShop\admin\templates\addBrand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64bfa97d190411_97982990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65a7588ed9c4dce9c288ff415747121044f1bb4f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\addBrand.tpl',
      1 => 1690282364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64bfa97d190411_97982990 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="addBrend.php" method="post">
    <label>Додайте назву бренда</label><br>
    <input type="text" name="brend"><br>
    <input type="submit" name="knopka" value="Додати">
</form><?php }
}
