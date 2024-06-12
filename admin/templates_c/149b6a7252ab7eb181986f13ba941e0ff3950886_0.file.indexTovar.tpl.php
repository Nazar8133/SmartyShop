<?php
/* Smarty version 4.3.1, created on 2023-08-13 12:53:02
  from 'C:\OSPanel\domains\smartiShop\admin\templates\indexTovar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d8a7fe1a2f28_66088237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '149b6a7252ab7eb181986f13ba941e0ff3950886' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\indexTovar.tpl',
      1 => 1691920381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d8a7fe1a2f28_66088237 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="get" action="indexTovar.php">
<label>Оберіть марку кровісов</label><br>
<select name="idBrend">
    <option value="0">Показати всі</option>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['brend']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <option value=<?php echo $_smarty_tpl->tpl_vars['brend']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
 <?php if ((isset($_smarty_tpl->tpl_vars['idBrend']->value)) && $_smarty_tpl->tpl_vars['idBrend']->value == $_smarty_tpl->tpl_vars['brend']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['brend']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
    <?php
}
}
?>
</select>
<input type="submit" name="knopka" value="Шукати">
</form>
<br>
<table border="1">
    <tr>
        <th>№</th>
        <th>Фото товару</th>
        <th>Назва товару</th>
        <th colspan="2">Управління</th>
    </tr>
    <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tovar']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
</th>
        <th><img src='../images/<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
' width="200px"></th>
        <th><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</th>
        <th><a href="updateTovar.php?id=<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Редагування</a></th>
        <th><a href="delTovar.php?id=<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
">Видалення</a></th>
        </tr>
    <?php
}
}
?>
</table><?php }
}
