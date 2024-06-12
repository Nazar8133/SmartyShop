<?php
/* Smarty version 4.3.1, created on 2023-08-30 12:14:13
  from 'C:\OSPanel\domains\smartiShop\admin\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ef0865aa7e72_68874625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4624c848b1683def1568ad129dab4de9f27c5ac2' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\registration.tpl',
      1 => 1693386853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ef0865aa7e72_68874625 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="registration.php" method="post" enctype="multipart/form-data">
    <label>Добавте імя користувача</label><br>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br>
    <label>Добавити роль</label><br>
    <select name="rule">
        <option value="1" selected>Оператор</option>
        <option value="2">Адміністратор</option>
    </select><br>
    <label>Добавте аватар</label><br>
    <input type="file" name="avatar"><br>
    <label>Добавте email</label><br>
    <input type="email" name="email"><br>
    <label>Придумайте пароль</label><br>
    <input type="password" name="password1"><br>
    <label>Повіторіть пароль</label><br>
    <input type="password" name="password2"><br>
    <label>Добавте номер</label><br>
    <input type="number" name="number" value="<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
"><br>
    <input type="submit" name="knopka" value="Зареэструвати"><br>
</form><?php }
}
