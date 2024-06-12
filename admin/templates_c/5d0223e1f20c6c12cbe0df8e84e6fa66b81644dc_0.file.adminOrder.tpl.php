<?php
/* Smarty version 4.3.1, created on 2023-10-30 22:31:45
  from 'C:\OSPanel\domains\smartiShop\admin\templates\adminOrder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_654004a1893376_76862912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d0223e1f20c6c12cbe0df8e84e6fa66b81644dc' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\adminOrder.tpl',
      1 => 1698694300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654004a1893376_76862912 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['adminOrder']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <?php if ($_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idKlient'] != $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['chengKlient'] || $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['dataOrder'] != $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['chengData']) {?>
        <tr>
            <th>№</th>
            <th>ПІБ</th>
            <th>Номер телефону</th>
            <th>Електронна пошта</th>
            <th>Адреса клієнта</th>
            <th>Коментарій до замовлення</th>
            <th>Дата замовлення</th>
            <th colspan="2">Управління замовленням</th>
        </tr>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pib'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['telefon'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adres'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['koment'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['dataOrder'];?>
</th>
            <th><a href="ranOrder.php?idKlient=<?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idKlient'];?>
&data=<?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['dataOrder'];?>
">Виконати</a></th>
            <th><a href="delOrder.php?idKlient=<?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idKlient'];?>
&data=<?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['dataOrder'];?>
">Видалити замовлення</a></th>
        </tr>
        <tr>
            <th colspan="3">Фото</th>
            <th>Модель</th>
            <th>Ціна</th>
            <th>Кількість замовленого товару клієнта</th>
            <th colspan="3">Вартість</th>
        </tr>
    <?php }?>
    <tr>
        <th colspan="3"><img src='../images/<?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
' width="200px"></th>
        <th><?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['metaTitle'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kolvoOrder'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['vartist'];?>
</th>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rowsCount'] == $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['klientRows']) {?>
        <tr>
            <th colspan="6">Вартість всього замовлення:</th>
            <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['adminOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ollOrder'];?>
</th>
        </tr>
    <?php }?>
    <?php
}
}
?>
</table><?php }
}
