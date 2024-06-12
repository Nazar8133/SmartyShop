<?php
/* Smarty version 4.3.1, created on 2023-08-15 13:19:27
  from 'C:\OSPanel\domains\smartiShop\admin\templates\updateBrend.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64db512f42bd18_24719454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f603eddd007e25c712d5020f41be07dcd1827ef' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\updateBrend.tpl',
      1 => 1692094758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64db512f42bd18_24719454 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="updateBrend.php">
    <label>Відредагуйтк назву бренду</label><br>
    <input type="text" name="brend" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br>
    <input type="submit" name="knopka" value="Редагувати"><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
</form><?php }
}
