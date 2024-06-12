<?php
/* Smarty version 4.3.1, created on 2024-06-03 18:34:42
  from 'D:\OSPanel\domains\smartiShop\admin\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_665de2927f19d7_74558634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f473b63eaa0b814fbec0ee9e0c2920fcc6888881' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\admin\\templates\\login.tpl',
      1 => 1693387480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665de2927f19d7_74558634 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="login.php">
    <label>Введіть ваш login</label><br>
    <input type="text" name="name"><br>
    <label>Введіть ваш пароль</label><br>
    <input type="password" name="password"><br>
    <input type="submit" name="knopka" value="Ввійти"><br>
</form><?php }
}
