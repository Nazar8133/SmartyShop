<?php
/* Smarty version 4.3.1, created on 2023-08-22 12:57:32
  from 'C:\OSPanel\domains\smartiShop\admin\templates\delPhoto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e4868c4ada82_20401999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6111429eb5af903d3cc79fea09314d0518709615' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\delPhoto.tpl',
      1 => 1692698246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e4868c4ada82_20401999 (Smarty_Internal_Template $_smarty_tpl) {
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
