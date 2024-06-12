<?php
/* Smarty version 4.3.1, created on 2023-09-17 12:08:17
  from 'C:\OSPanel\domains\smartiShop\admin\templates\settingUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6506c2017df372_17573634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5eff4086fecfdeddc661d967817e629f372df9f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\settingUser.tpl',
      1 => 1694941323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6506c2017df372_17573634 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="settingUser.php" enctype="multipart/form-data">
    <label>Редагуйте login</label><br>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br>
    <label>Редагуйте email</label><br>
    <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"><br>
    <label>Редагуйте номер телефона</label><br>
    <input type="number" name="number" value="<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
"><br>
    <label>Редагуйте аватар</label><br>
    <img src='imagesAvatar/<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
' width="200px"><br>
    <input type="file" name="newAvatar"><br>
    <input type="hidden" name="oldAvatar" value="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
">
    <a href="updatePasswort.php">Редагувати пароль</a><br>
    <input type="submit" name="knopka" value="Редагувати"><br>
</form><?php }
}
