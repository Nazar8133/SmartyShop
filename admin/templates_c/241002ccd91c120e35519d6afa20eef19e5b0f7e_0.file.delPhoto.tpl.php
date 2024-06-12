<?php
/* Smarty version 4.3.1, created on 2024-06-06 20:09:19
  from 'D:\OSPanel\domains\smartiShop\admin\templates\delPhoto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6661ed3f5e4287_77646934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '241002ccd91c120e35519d6afa20eef19e5b0f7e' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\admin\\templates\\delPhoto.tpl',
      1 => 1692698246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6661ed3f5e4287_77646934 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="delPhoto.php" method="post">
    <h3>Ви дійсно хочете видалити це фото - <img src='../images/<?php echo $_smarty_tpl->tpl_vars['fileName']->value;?>
' width="200px"></h3>
    <input type="radio" name="del" value="Yes" checked>Так
    <input type="radio" name="del" value="No">Ні
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="hidden" name="idTovar" value="<?php echo $_smarty_tpl->tpl_vars['idTovar']->value;?>
">
    <input type="hidden" name="fileName" value="<?php echo $_smarty_tpl->tpl_vars['fileName']->value;?>
">
    <input type="submit" name="knopka" value="Видалити">
</form><?php }
}
