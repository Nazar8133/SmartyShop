<?php
/* Smarty version 4.3.1, created on 2024-06-12 17:51:53
  from 'D:\OSPanel\domains\smartiShop\templates\order2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6669b609c950b0_08943495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80b02131082c333d62625bb32c0f9d2b14c7bc27' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\templates\\order2.tpl',
      1 => 1718057564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6669b609c950b0_08943495 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table table-bordered product-table">
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
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['zakaz']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <td><img class="product-image" src="/images/<?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" alt=""/></td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['metaTitle'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kolvo'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['vart'];?>
</td>
        </tr>
    <?php
}
}
?>
    <tr>
        <td colspan="4" style="text-align:right"><strong>Загальна вартість:</strong></td>
        <td class="label label-important" style="display:block"><strong><?php echo $_smarty_tpl->tpl_vars['zahVart']->value;?>
</strong></td>
    </tr>
    </tbody>
</table>

<br>
<div class="row">
    <div class="span4">
        <div class="well">
            <h5>Для нових користувачів</h5>
            <form method="post" action="registr.php">
                <div class="control-group">
                    <label class="control-label">Створіть логін</label>
                    <div class="controls">
                        <input class="span3" type="text" placeholder="Логін" name="login" <?php if ((isset($_smarty_tpl->tpl_vars['login']->value)) && !empty($_smarty_tpl->tpl_vars['login']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"<?php }?>>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Створіть пароль</label>
                    <div class="controls">
                        <input class="span3" type="password" placeholder="Пароль" name="password1">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Повторіть пароль</label>
                    <div class="controls">
                        <input class="span3" type="password" placeholder="Пароль" name="password2">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Введіть ПІБ</label>
                    <div class="controls">
                        <input class="span3" type="text" placeholder="ПІБ" name="pib" <?php if ((isset($_smarty_tpl->tpl_vars['pib']->value)) && !empty($_smarty_tpl->tpl_vars['pib']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['pib']->value;?>
"<?php }?>>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Введіть номер телефону</label>
                    <div class="controls">
                        <input class="span3" type="number" placeholder="Номер" name="number" <?php if ((isset($_smarty_tpl->tpl_vars['number']->value)) && !empty($_smarty_tpl->tpl_vars['number']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
"<?php }?>>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Введіть email</label>
                    <div class="controls">
                        <input class="span3" type="email" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Введіть адресу</label>
                    <div class="controls">
                        <textarea class="span3" placeholder="Адреса" name="adres"><?php if ((isset($_smarty_tpl->tpl_vars['adres']->value)) && !empty($_smarty_tpl->tpl_vars['adres']->value)) {
echo $_smarty_tpl->tpl_vars['adres']->value;
}?></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Добавте ваш коментарій(Необовязково)</label>
                    <div class="controls">
                        <textarea class="span3" placeholder="Коментар" name="koment"><?php if ((isset($_smarty_tpl->tpl_vars['koment']->value)) && !empty($_smarty_tpl->tpl_vars['koment']->value)) {
echo $_smarty_tpl->tpl_vars['koment']->value;
}?></textarea>
                    </div>
                </div>
                <div class="controls">
                    <input class="btn" type="submit" name="knopka" value="Зареєструватись та замовити">
                </div>
            </form>
        </div>
    </div>
    <div class="span1"> &nbsp;</div>
    <div class="span4">
        <div class="well">
            <h5>Для зареэстрованих користувачів</h5>
            <form method="post" action="login.php">
                <div class="control-group">
                    <label class="control-label">Логін</label>
                    <div class="controls">
                        <input class="span3"  type="text" placeholder="Логін" name="login">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Пароль</label>
                    <div class="controls">
                        <input type="password" class="span3" placeholder="Пароль" name="password">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Коментар до замовлення(Необовязково)</label>
                    <div class="controls">
                        <textarea class="span3" name="koment" placeholder="Коментар"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input class="btn" type="submit" name="knopka" value="Ввійти"><br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
