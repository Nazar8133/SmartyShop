<?php
/* Smarty version 4.3.1, created on 2023-08-27 12:45:02
  from 'C:\OSPanel\domains\smartiShop\admin\templates\updatePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64eb1b1e9b1346_02667373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b24d703f7918f275da85053f8cb0e096b58d48f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\updatePage.tpl',
      1 => 1693129461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64eb1b1e9b1346_02667373 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="updatePage.php">
    <label>Редагуйте metaTitle</label><br>
    <textarea name="metaTitle"><?php echo $_smarty_tpl->tpl_vars['metaTitle']->value;?>
</textarea><br>
    <label>Редагуйте metaDiscription</label><br>
    <textarea name="metaDiscription"><?php echo $_smarty_tpl->tpl_vars['metaDiscription']->value;?>
</textarea><br>
    <label>Редагуйте metaKeywords</label><br>
    <textarea name="metaKeywords"><?php echo $_smarty_tpl->tpl_vars['metaKeywords']->value;?>
</textarea><br>
    <label>Редагуйте title</label><br>
    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><br>
    <label>Редагуйте fullContent</label><br>
    <textarea name="fullContent"><?php echo $_smarty_tpl->tpl_vars['fullContent']->value;?>
</textarea><br>
    <label>Редагуйте назву сторінки</label><br>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br>
    <label>Редагувати page</label><br>
    <input type="text" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><br>
    <label>Редагувати пріритет</label><br>
    <select name="prior"><br>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['numRowsPrior']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= $_prefixVariable1) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= $_prefixVariable1; $_smarty_tpl->tpl_vars['i']->value++) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['prior']->value == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
        <?php }
}
?>
    </select><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="hidden" name="priorOld" value="<?php echo $_smarty_tpl->tpl_vars['prior']->value;?>
">
    <input type="submit" name="knopka" value="Редагувати"><br>
</form><?php }
}
