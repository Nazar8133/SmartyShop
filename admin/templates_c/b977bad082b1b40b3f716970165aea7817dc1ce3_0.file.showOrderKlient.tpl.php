<?php
/* Smarty version 4.3.1, created on 2023-11-07 15:19:02
  from 'C:\OSPanel\domains\smartiShop\admin\templates\showOrderKlient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_654a2b368a4443_43493452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b977bad082b1b40b3f716970165aea7817dc1ce3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\showOrderKlient.tpl',
      1 => 1699359539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654a2b368a4443_43493452 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
        <tr>
            <th colspan="2">ПІБ</th>
            <th colspan="2">Email</th>
            <th>Номер телефону</th>
        </tr>
        <tr>
            <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['pib']->value;?>
</th>
            <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</th>
        </tr>

        <tr>
            <th>Фото</th>
            <th>Назва товару</th>
            <th>Опис товару</th>
            <th>Ціна</th>
            <th>Кількість замовленого товару</th>
        </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['showOrderKlient']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <th><img src='../images/<?php echo $_smarty_tpl->tpl_vars['showOrderKlient']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
' width="200px"></th>
            <th><?php echo $_smarty_tpl->tpl_vars['showOrderKlient']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['metaTitle'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['showOrderKlient']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['har'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['showOrderKlient']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['showOrderKlient']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderKolvo'];?>
</th>
        </tr>
    <?php
}
}
?>
</table><?php }
}
