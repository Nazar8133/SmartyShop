<?php
/* Smarty version 4.3.1, created on 2024-06-03 21:56:23
  from 'D:\OSPanel\domains\smartiShop\admin\templates\orderArchiv.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_665e11d7b058f0_90939711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51a4f7e665b4f4ad9fa8dd2a46967b74490b4735' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\admin\\templates\\orderArchiv.tpl',
      1 => 1698767276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e11d7b058f0_90939711 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['orderArchiv']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <?php if ($_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idKlient'] != $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['chengKlient'] || $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['dataOrder'] != $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['chengData']) {?>
    <tr>
        <th>№</th>
        <th>ПІБ</th>
        <th>Номер телефону</th>
        <th>Електронна пошта</th>
        <th>Адреса клієнта</th>
        <th>Коментарій до замовлення</th>
        <th>Дата Замовлення</th>
        <th>Відновити замовлення</th>
    </tr>
    <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pib'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nomer'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adres'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['koment'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['dataOrder'];?>
</th>
        <th><a href="vostanOrder.php?idKlient=<?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idKlient'];?>
&dataOrder=<?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['dataOrder'];?>
">Відновити</a></th>
    </tr>
    <tr>
        <th colspan="3">Фото</th>
        <th>Модель</th>
        <th>Ціна</th>
        <th>Кількість замовленого товару</th>
        <th colspan="2">Вартість</th>
    </tr>
    <?php }?>
    <tr>
        <th colspan="3"><img src='../images/<?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
' width="200px"></th>
        <th><?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['metaTitle'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderKolvo'];?>
</th>
        <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['vartist'];?>
</th>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['klientRows'] == $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rowsCount']) {?>
        <tr>
            <th colspan="6">Вартість всього замовлення</th>
            <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['orderArchiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ollOrder'];?>
</th>
        </tr>
    <?php }
}
}
?>
</table><?php }
}
