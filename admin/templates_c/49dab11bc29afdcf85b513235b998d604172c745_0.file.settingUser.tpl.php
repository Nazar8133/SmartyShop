<?php
/* Smarty version 4.3.1, created on 2024-06-03 18:51:44
  from 'D:\OSPanel\domains\smartiShop\admin\templates\settingUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_665de69006d2c1_70120809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49dab11bc29afdcf85b513235b998d604172c745' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\admin\\templates\\settingUser.tpl',
      1 => 1694941323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665de69006d2c1_70120809 (Smarty_Internal_Template $_smarty_tpl) {
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
