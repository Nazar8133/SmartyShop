<?php
/* Smarty version 4.3.1, created on 2023-08-15 13:35:37
  from 'C:\OSPanel\domains\smartiShop\admin\templates\delBrend.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64db54f9e93be9_56535553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e95b7dbcd03e3c8c286b82811e83038f260f20b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\delBrend.tpl',
      1 => 1692092069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64db54f9e93be9_56535553 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="delBrend.php">
    <h2>Ви дійсно хочете видалити даний бренд - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
    <input type="radio" name="del" value="Yes" checked>Так
    <input type="radio" name="del" value="No">Ні
    <input type="submit" name="knopka" value="Підтвердити"><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
</form><?php }
}
