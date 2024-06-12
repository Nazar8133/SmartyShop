<?php
/* Smarty version 4.3.1, created on 2023-09-17 11:59:53
  from 'C:\OSPanel\domains\smartiShop\admin\templates\updatePasswort.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6506c009676de4_73247278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ed4cead002952b162da76e43aa81342a9adf26a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\updatePasswort.tpl',
      1 => 1694544680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6506c009676de4_73247278 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="updatePasswort.php">
    <label>Введіть старий пароль</label><br>
    <input type="password" name="oldPassword"><br>
    <label>Введіть новий пароль</label><br>
    <input type="password" name="newPassword1"><br>
    <label>Введіть новий пароль повторно</label><br>
    <input type="password" name="newPassword2"><br>
    <input type="submit" name="knopka" value="Редагувати"><br>
</form><?php }
}
