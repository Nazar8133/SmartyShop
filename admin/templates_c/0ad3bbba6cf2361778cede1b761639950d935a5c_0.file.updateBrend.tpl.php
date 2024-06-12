<?php
/* Smarty version 4.3.1, created on 2024-06-03 18:59:26
  from 'D:\OSPanel\domains\smartiShop\admin\templates\updateBrend.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_665de85e2e84e8_85788349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ad3bbba6cf2361778cede1b761639950d935a5c' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\admin\\templates\\updateBrend.tpl',
      1 => 1692094758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665de85e2e84e8_85788349 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="updateBrend.php">
    <label>Відредагуйтк назву бренду</label><br>
    <input type="text" name="brend" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br>
    <input type="submit" name="knopka" value="Редагувати"><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
</form><?php }
}
