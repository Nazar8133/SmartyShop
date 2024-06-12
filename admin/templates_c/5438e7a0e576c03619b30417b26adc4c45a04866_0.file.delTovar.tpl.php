<?php
/* Smarty version 4.3.1, created on 2023-08-15 12:30:44
  from 'C:\OSPanel\domains\smartiShop\admin\templates\delTovar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64db45c4500173_72715262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5438e7a0e576c03619b30417b26adc4c45a04866' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\delTovar.tpl',
      1 => 1692091532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64db45c4500173_72715262 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="delTovar.php">
    <h2>Ви дійсно хочете видалити цей товар - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2><br>
    <input type="radio" name="del" value="Yes" checked>Так
    <input type="radio" name="del" value="No">Ні
    <input type="submit" name="knopka" value="Підтвердити"><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
</form><?php }
}
