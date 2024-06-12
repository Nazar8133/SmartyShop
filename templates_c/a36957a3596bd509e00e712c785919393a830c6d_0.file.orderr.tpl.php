<?php
/* Smarty version 4.3.1, created on 2024-06-11 00:25:13
  from 'D:\OSPanel\domains\smartiShop\templates\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66676f391ec2c3_35580854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a36957a3596bd509e00e712c785919393a830c6d' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\templates\\order.tpl',
      1 => 1718054626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66676f391ec2c3_35580854 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="order.php" method="post">
<h3>Кошик товарів</h3>

<table class="table table-bordered product-table">
    <thead>
    <tr>
        <th>Фото</th>
        <th>Модель</th>
        <th>Кількість</th>
        <th>Ціна</th>
        <th>Вартість</th>
    </tr>
    </thead>
    <tbody>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tovar']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>
        <td><img class="product-image" src="/images/<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" alt=""/></td>
        <td><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['metaTitle'];?>
</td>
        <td>
            <div class="input-append">
                <input class="span1 quantity-input" placeholder="1" id="appendedInputButtons" size="16" type="text" name="kolvo<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" min="1" max="<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['skladKilk'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kolvo'];?>
">
                <a href="/basket.php?id=<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mode=del&script=order" class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></a>
            </div>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kilk'];?>
</td>
    </tr>
    <?php
}
}
?>
    <tr>
        <th colspan="3"><a class="btn" href="/basket.php?mode=clear">Очистити</a></th>
        <th colspan="2"><input class="btn" type="submit" name="btn" value="Перерахувати"></th>
    </tr>
    <tr>
        <td colspan="4" style="text-align:right"><strong>Загальна вартість:</strong></td>
        <td class="label label-important" style="display:block"><strong><?php echo $_smarty_tpl->tpl_vars['zahKilk']->value;?>
</strong></td>
    </tr>
    </tbody>
</table>

<br>
<a href="catalog.php" class="btn btn-large"><i class="icon-arrow-left"></i> Назад </a>
<a href="/order2.php" class="btn btn-large pull-right">Продовжити замовлення   <i class="icon-arrow-right"></i></a>
</form><?php }
}
