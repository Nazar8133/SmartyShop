<?php
/* Smarty version 4.3.1, created on 2023-08-30 13:08:13
  from 'C:\OSPanel\domains\smartiShop\admin\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ef150d457af3_12139515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c071669e24ec4e876324c0292f8dd5359bed3451' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\login.tpl',
      1 => 1693387480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ef150d457af3_12139515 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="login.php">
    <label>Введіть ваш login</label><br>
    <input type="text" name="name"><br>
    <label>Введіть ваш пароль</label><br>
    <input type="password" name="password"><br>
    <input type="submit" name="knopka" value="Ввійти"><br>
</form><?php }
}
