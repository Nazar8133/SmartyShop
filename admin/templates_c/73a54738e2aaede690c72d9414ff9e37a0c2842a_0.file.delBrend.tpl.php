<?php
/* Smarty version 4.3.1, created on 2024-06-03 18:59:28
  from 'D:\OSPanel\domains\smartiShop\admin\templates\delBrend.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_665de860ed12f5_45680312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a54738e2aaede690c72d9414ff9e37a0c2842a' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\admin\\templates\\delBrend.tpl',
      1 => 1692092069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665de860ed12f5_45680312 (Smarty_Internal_Template $_smarty_tpl) {
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
