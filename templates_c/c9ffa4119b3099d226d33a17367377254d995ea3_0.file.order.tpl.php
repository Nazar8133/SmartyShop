<?php
/* Smarty version 4.3.1, created on 2023-10-10 16:39:32
  from 'C:\OSPanel\domains\smartiShop\templates\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652554148ef387_00391488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9ffa4119b3099d226d33a17367377254d995ea3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\templates\\order.tpl',
      1 => 1696945168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652554148ef387_00391488 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="order.php" method="post">
<table border="1">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Модель</th>
        <th>Ціна</th>
        <th>Кількість</th>
        <th>Вартість</th>
        <th>Видалити</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tovar']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
</td>
        <td><img src="/images/<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="200px"></td>
        <td><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['metaTitle'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
        <td><input type="number" name="kolvo<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" min="1" max="<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['skladKilk'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kolvo'];?>
"></td>
        <td><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kilk'];?>
</td>
        <td><a href="/basket.php?id=<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mode=del&script=order">Видалити</a></td>
    </tr>
    <?php
}
}
?>
        <tr>
            <th colspan="5">Загальна вартість: </th>
            <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['zahKilk']->value;?>
</th>
        </tr>
        <tr>
            <th colspan="5"><a href="/basket.php?mode=clear">Очистити</a></th>
            <th colspan="4"><a href="/order2.php">Продовжити замовлення</a></th>
        </tr>
        <tr>
            <th colspan="9"><input type="submit" name="btn" value="Перерахувати"></th>
        </tr>

</table>
</form><?php }
}
