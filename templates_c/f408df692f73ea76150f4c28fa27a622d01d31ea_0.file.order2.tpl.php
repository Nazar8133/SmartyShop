<?php
/* Smarty version 4.3.1, created on 2023-10-29 14:10:59
  from 'C:\OSPanel\domains\smartiShop\templates\order2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653e3dc3442023_85088126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f408df692f73ea76150f4c28fa27a622d01d31ea' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\templates\\order2.tpl',
      1 => 1698577736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653e3dc3442023_85088126 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Модель</th>
        <th>Ціна</th>
        <th>Кількість</th>
        <th>Вартість</th>
    </tr>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['zakaz']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
</th>
        <th><img src="/images/<?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="200px"></th>
        <th><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['metaTitle'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kolvo'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['vart'];?>
</th>
    </tr>
        <?php
}
}
?>
    <tr>
        <th colspan="5">Загальна вартість: </th>
        <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['zahVart']->value;?>
</th>
    </tr>
</table>

<div>
    <h6>Для нових користувачів</h6>
<form method="post" action="registr.php">
    <label>Введіть ваш логін</label><br>
    <input type="text" name="login" <?php if ((isset($_smarty_tpl->tpl_vars['login']->value)) && !empty($_smarty_tpl->tpl_vars['login']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"<?php }?>><br>
    <label>Введіть ваш пароль</label><br>
    <input type="password" name="password1"><br>
    <label>Повторіть пароль</label><br>
    <input type="password" name="password2"><br>
    <label>Введіть ПІБ</label><br>
    <input type="text" name="pib" <?php if ((isset($_smarty_tpl->tpl_vars['pib']->value)) && !empty($_smarty_tpl->tpl_vars['pib']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['pib']->value;?>
"<?php }?>><br>
    <label>Введіть номер телефону</label><br>
    <input type="number" name="number" <?php if ((isset($_smarty_tpl->tpl_vars['number']->value)) && !empty($_smarty_tpl->tpl_vars['number']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
"<?php }?>><br>
    <label>Введіть email</label><br>
    <input type="email" name="email"><br>
    <label>Введіть адресу</label><br>
    <textarea name="adres"><?php if ((isset($_smarty_tpl->tpl_vars['adres']->value)) && !empty($_smarty_tpl->tpl_vars['adres']->value)) {
echo $_smarty_tpl->tpl_vars['adres']->value;
}?></textarea><br>
    <label>Добавте ваш коментарій(Необовязково)</label><br>
    <textarea name="koment"><?php if ((isset($_smarty_tpl->tpl_vars['koment']->value)) && !empty($_smarty_tpl->tpl_vars['koment']->value)) {
echo $_smarty_tpl->tpl_vars['koment']->value;
}?></textarea><br>
    <input type="submit" name="knopka" value="Зареєструватись та замовити">
</form>
<div class="form">
    <h6>Для зареєстрованих користувачів</h6>
<form method="post" action="login.php">
    <label>Введіть логін</label><br>
    <input type="text" name="login"><br>
    <label>Введіть пароль</label><br>
    <input type="password" name="password"><br>
    <label>Введіть коментар до замовлення(Необовязково)</label><br>
    <textarea name="koment"></textarea><br>
    <input type="submit" name="knopka" value="Ввійти"><br>
</form>
</div>
</div><?php }
}
