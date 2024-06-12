<?php
/* Smarty version 4.3.1, created on 2023-09-26 17:48:00
  from 'C:\OSPanel\domains\smartiShop\templates\catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6512ef200c6b22_09973913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '395a38c12b3f5d24fd0d8dd2c4dafe51a179f70b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\templates\\catalog.tpl',
      1 => 1695739679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6512ef200c6b22_09973913 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['rez']->value == 1) {?>
<table border="1">
    <tr>
        <th>№</th>
        <th><a href="catalog.php?sort2=<?php echo $_smarty_tpl->tpl_vars['sort2']->value;
if ((isset($_smarty_tpl->tpl_vars['idBrend']->value))) {?>&id=<?php echo $_smarty_tpl->tpl_vars['idBrend']->value;
}?>">Назва</a></th>
        <th>Фото</th>
        <th><a href="catalog.php?sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
if ((isset($_smarty_tpl->tpl_vars['idBrend']->value))) {?>&id=<?php echo $_smarty_tpl->tpl_vars['idBrend']->value;
}?>">Ціна</a></th>
        <th>Кількість</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tovar']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>

        <th><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['number'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['metaTitle'];?>
</th>
            <th><img src="/images/<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="200px"></th>
        <th><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kolvo'];?>
</th>

    </tr>
    <?php
}
}
?>
</table>
<table border="1">
    <tr>
        <?php if ($_smarty_tpl->tpl_vars['activePage']->value == 1) {?>
            <th class="activepage"> < </th>
            <th class="activepage"> << </th>
        <?php } else { ?>
                <th><a href="catalog.php?page=1<?php if ((isset($_smarty_tpl->tpl_vars['sort']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort1']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort2']->value))) {?>&sort2=<?php echo $_smarty_tpl->tpl_vars['sort12']->value;
}
if ((isset($_smarty_tpl->tpl_vars['idBrend']->value))) {?>&id=<?php echo $_smarty_tpl->tpl_vars['idBrend']->value;
}?>"> < </a></th>
                <th><a href="catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['activePage']->value-1;
if ((isset($_smarty_tpl->tpl_vars['sort']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort1']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort2']->value))) {?>&sort2=<?php echo $_smarty_tpl->tpl_vars['sort12']->value;
}
if ((isset($_smarty_tpl->tpl_vars['idBrend']->value))) {?>&id=<?php echo $_smarty_tpl->tpl_vars['idBrend']->value;
}?>"> << </a></th>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['p']->value = 1;
if ($_smarty_tpl->tpl_vars['p']->value <= $_smarty_tpl->tpl_vars['pages']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['p']->value <= $_smarty_tpl->tpl_vars['pages']->value; $_smarty_tpl->tpl_vars['p']->value++) {
?>
            <?php if ($_smarty_tpl->tpl_vars['activePage']->value == $_smarty_tpl->tpl_vars['p']->value) {?>
                <th class="activepage"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</th>
            <?php } else { ?>
                    <th><a href="catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['p']->value;
if ((isset($_smarty_tpl->tpl_vars['sort']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort1']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort2']->value))) {?>&sort2=<?php echo $_smarty_tpl->tpl_vars['sort12']->value;
}
if ((isset($_smarty_tpl->tpl_vars['idBrend']->value))) {?>&id=<?php echo $_smarty_tpl->tpl_vars['idBrend']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a></th>
            <?php }?>
        <?php }
}
?>
        <?php if ($_smarty_tpl->tpl_vars['activePage']->value == $_smarty_tpl->tpl_vars['pages']->value) {?>
            <th class="activepage"> >> </th>
            <th class="activepage"> > </th>
        <?php } else { ?>
                <th><a href="catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['activePage']->value+1;
if ((isset($_smarty_tpl->tpl_vars['sort']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort1']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort2']->value))) {?>&sort2=<?php echo $_smarty_tpl->tpl_vars['sort12']->value;
}
if ((isset($_smarty_tpl->tpl_vars['idBrend']->value))) {?>&id=<?php echo $_smarty_tpl->tpl_vars['idBrend']->value;
}?>"> >> </a></th>
                <th><a href="catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;
if ((isset($_smarty_tpl->tpl_vars['sort']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort1']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort2']->value))) {?>&sort2=<?php echo $_smarty_tpl->tpl_vars['sort12']->value;
}
if ((isset($_smarty_tpl->tpl_vars['idBrend']->value))) {?>&id=<?php echo $_smarty_tpl->tpl_vars['idBrend']->value;
}?>"> > </a></th>
        <?php }?>
    </tr>
</table>
<?php } elseif ($_smarty_tpl->tpl_vars['rez']->value == 2) {?>
Даного товара наразі немає!
<?php }
}
}
