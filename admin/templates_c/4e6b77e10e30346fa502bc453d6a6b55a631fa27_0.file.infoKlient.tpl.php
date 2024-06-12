<?php
/* Smarty version 4.3.1, created on 2023-11-05 13:58:25
  from 'C:\OSPanel\domains\smartiShop\admin\templates\infoKlient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65477551f04980_90743466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e6b77e10e30346fa502bc453d6a6b55a631fa27' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\infoKlient.tpl',
      1 => 1699181512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65477551f04980_90743466 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
        <tr>
            <th>№</th>
            <th>ПІБ</th>
            <th>Кількість куплених пар кросівок</th>
        </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['infoKlient']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['infoKlient']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
</th>
            <th><a href="showOrderKlient.php?idKlient=<?php echo $_smarty_tpl->tpl_vars['infoKlient']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idKlient'];?>
"><?php echo $_smarty_tpl->tpl_vars['infoKlient']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pib'];?>
</a></th>
            <th><?php echo $_smarty_tpl->tpl_vars['infoKlient']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kolvoKlient'];?>
</th>
        </tr>
    <?php
}
}
?>
</table>
<?php }
}
