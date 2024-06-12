<?php
/* Smarty version 4.3.1, created on 2023-08-06 12:47:10
  from 'C:\OSPanel\domains\smartiShop\admin\templates\addTovar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64cf6c1ee6c783_91280489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b7505ce9fe98e8a7425546c88e5d187682335f3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\addTovar.tpl',
      1 => 1691315228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64cf6c1ee6c783_91280489 (Smarty_Internal_Template $_smarty_tpl) {
?><form  action="addTovar.php" method="post" enctype="multipart/form-data">
    <label>Додати metaTitle</label><br>
    <input type="text" name="metaTitle"><br>
    <label>Додати metaDiscription</label><br>
    <input type="text" name="metaDiscription"><br>
    <label>Додати metaKeywords</label><br>
    <input type="text" name="metaKeywords"><br>
    <label>Додати title</label><br>
    <input type="text" name="title"><br>
    <label>Додати ціну товару</label><br>
    <input type="number" name="price"><br>
    <label>Оберіть марку кросівок</label><br>
    <select name="idBrend"><br>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['brend']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <option value=<?php echo $_smarty_tpl->tpl_vars['brend']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
><?php echo $_smarty_tpl->tpl_vars['brend']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
        <?php
}
}
?>
    </select><br>
    <label>Додайте кількість товару</label><br>
    <input type="number" name="kolvo"><br>
    <label>Додайте характеристику товару</label><br>
    <textarea name="har"></textarea><br>
    <label>Додати дату виготовлення товару</label><br>
    <input type="date" name="data"><br>
    <label>Додати фото товару</label><br>
    <input type="file" name="photo[]" multiple><br>
    <input type="submit" name="knopka" value="Додати"><br>
</form><?php }
}
