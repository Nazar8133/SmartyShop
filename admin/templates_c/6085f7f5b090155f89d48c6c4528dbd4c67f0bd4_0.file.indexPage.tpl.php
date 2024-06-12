<?php
/* Smarty version 4.3.1, created on 2023-08-08 13:40:58
  from 'C:\OSPanel\domains\smartiShop\admin\templates\indexPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d21bbac4f770_18634457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6085f7f5b090155f89d48c6c4528dbd4c67f0bd4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\indexPage.tpl',
      1 => 1691491258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d21bbac4f770_18634457 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <tr>
    <th>№</th>
    <th>Назва сторінки</th>
    <th>Управління</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['page']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['page']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['page']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</th>
            <th><a href="updatePage.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Редагувати</a></th>
        </tr>
    <?php
}
}
?>
</table><?php }
}
