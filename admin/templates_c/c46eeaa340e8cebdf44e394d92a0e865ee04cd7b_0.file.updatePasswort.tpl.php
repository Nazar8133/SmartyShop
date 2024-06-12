<?php
/* Smarty version 4.3.1, created on 2024-06-03 22:12:24
  from 'D:\OSPanel\domains\smartiShop\admin\templates\updatePasswort.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_665e15981e3dc2_95915138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c46eeaa340e8cebdf44e394d92a0e865ee04cd7b' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\admin\\templates\\updatePasswort.tpl',
      1 => 1694544680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e15981e3dc2_95915138 (Smarty_Internal_Template $_smarty_tpl) {
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
