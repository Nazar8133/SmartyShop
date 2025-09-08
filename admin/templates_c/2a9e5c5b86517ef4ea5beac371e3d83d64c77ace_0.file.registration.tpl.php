<?php
/* Smarty version 4.3.1, created on 2025-09-08 19:40:08
  from 'D:\OSPanel\domains\smartiShop\admin\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68bf06e8384f71_76030047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a9e5c5b86517ef4ea5beac371e3d83d64c77ace' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\admin\\templates\\registration.tpl',
      1 => 1757349607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68bf06e8384f71_76030047 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="registration.php" method="post" enctype="multipart/form-data">
    <label>Добавте імя користувача</label><br>
    <input type="text" name="name" <?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" <?php }?>><br>
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
    <input type="number" name="number" <?php if ((isset($_smarty_tpl->tpl_vars['number']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
" <?php }?>><br>
    <input type="submit" name="knopka" value="Зареэструвати"><br>
</form><?php }
}
