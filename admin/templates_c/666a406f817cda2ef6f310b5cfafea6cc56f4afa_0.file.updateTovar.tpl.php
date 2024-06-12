<?php
/* Smarty version 4.3.1, created on 2023-08-22 12:45:10
  from 'C:\OSPanel\domains\smartiShop\admin\templates\updateTovar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64e483a692f7b0_74221018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '666a406f817cda2ef6f310b5cfafea6cc56f4afa' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\updateTovar.tpl',
      1 => 1692697505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e483a692f7b0_74221018 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="updateTovar.php" enctype="multipart/form-data">
    <label>Редагуйте metaTitle</label><br>
    <input type="text" name="metaTitle" value="<?php echo $_smarty_tpl->tpl_vars['metaTitle']->value;?>
"><br>
    <label>Редагуйте metaDiscription</label><br>
    <input type="text" name="metaDiscription" value="<?php echo $_smarty_tpl->tpl_vars['metaDiscription']->value;?>
"><br>
    <label>Редагуйте metaKeywords</label><br>
    <input type="text" name="metaKeywords" value="<?php echo $_smarty_tpl->tpl_vars['metaKeywords']->value;?>
"><br>
    <label>Редануйте title</label><br>
    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><br>
    <label>Редагуйте ціну</label><br>
    <input type="number" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
"><br>
    <label>Редагуйте кількість</label><br>
    <input type="number" name="kolvo" value="<?php echo $_smarty_tpl->tpl_vars['kolvo']->value;?>
"><br>
    <label>Редагуйте характеристику</label><br>
    <textarea name="har"><?php echo $_smarty_tpl->tpl_vars['har']->value;?>
</textarea><br>
    <label>Редагуйте дату виготовлення</label><br>
    <input type="date" name="data" value="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"><br>
    <label>Редагуйте фотографію</label><br>
    <input type="file" name="photo[]" multiple><br>
    <table border="1">

        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['photo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <th><img src="../images/<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
" width="100px"></th>
            <th><a href="delPhoto.php?fileName=<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&idTovar=<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idTovar'];?>
">Видалити</a></th>
            <th><input type="radio" name="status" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 1) {?>checked<?php }?>><?php if ($_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 1) {?>Головна<?php } else { ?>Неголовна<?php }?></th>
        </tr>
            <?php
}
}
?>

    </table>
    <input type="submit" name="knopka" value="Редагувати"><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
</form><?php }
}
