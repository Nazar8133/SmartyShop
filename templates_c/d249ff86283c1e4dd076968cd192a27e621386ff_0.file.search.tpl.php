<?php
/* Smarty version 4.3.1, created on 2023-10-03 15:46:17
  from 'C:\OSPanel\domains\smartiShop\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651c0d1991d768_83776130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd249ff86283c1e4dd076968cd192a27e621386ff' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\templates\\search.tpl',
      1 => 1696337177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651c0d1991d768_83776130 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1">
    <tr>
        <th>№</th>
        <th>Назва кросівок</th>
        <th>Ціна</th>
        <th>Характеристика</th>
        <th>Кількість кросівок</th>
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
            <th><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['har'];?>
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
            <th><a href="search.php?page=1<?php if ((isset($_smarty_tpl->tpl_vars['searchPriceOt']->value))) {?>&searchPriceOt=<?php echo $_smarty_tpl->tpl_vars['searchPriceOt']->value;
}
if ((isset($_smarty_tpl->tpl_vars['searchPriceDo']->value))) {?>&searchPriceDo=<?php echo $_smarty_tpl->tpl_vars['searchPriceDo']->value;
}
if ((isset($_smarty_tpl->tpl_vars['searchTovar']->value))) {?>&searchTovar=<?php echo $_smarty_tpl->tpl_vars['searchTovar']->value;
}?>"> < </a></th>
            <th><a href="search.php?page=<?php echo $_smarty_tpl->tpl_vars['activePage']->value-1;
if ((isset($_smarty_tpl->tpl_vars['searchPriceOt']->value))) {?>&searchPriceOt=<?php echo $_smarty_tpl->tpl_vars['searchPriceOt']->value;
}
if ((isset($_smarty_tpl->tpl_vars['searchPriceDo']->value))) {?>&searchPriceDo=<?php echo $_smarty_tpl->tpl_vars['searchPriceDo']->value;
}
if ((isset($_smarty_tpl->tpl_vars['searchTovar']->value))) {?>&searchTovar=<?php echo $_smarty_tpl->tpl_vars['searchTovar']->value;
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
                <th><a href="search.php?page=<?php echo $_smarty_tpl->tpl_vars['p']->value;
if ((isset($_smarty_tpl->tpl_vars['searchPriceOt']->value))) {?>&searchPriceOt=<?php echo $_smarty_tpl->tpl_vars['searchPriceOt']->value;
}
if ((isset($_smarty_tpl->tpl_vars['searchPriceDo']->value))) {?>&searchPriceDo=<?php echo $_smarty_tpl->tpl_vars['searchPriceDo']->value;
}
if ((isset($_smarty_tpl->tpl_vars['searchTovar']->value))) {?>&searchTovar=<?php echo $_smarty_tpl->tpl_vars['searchTovar']->value;
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
            <th><a href="search.php?page=<?php echo $_smarty_tpl->tpl_vars['activePage']->value+1;
if ((isset($_smarty_tpl->tpl_vars['searchPriceOt']->value))) {?>&searchPriceOt=<?php echo $_smarty_tpl->tpl_vars['searchPriceOt']->value;
}
if ((isset($_smarty_tpl->tpl_vars['searchPriceDo']->value))) {?>&searchPriceDo=<?php echo $_smarty_tpl->tpl_vars['searchPriceDo']->value;
}
if ((isset($_smarty_tpl->tpl_vars['searchTovar']->value))) {?>&searchTovar=<?php echo $_smarty_tpl->tpl_vars['searchTovar']->value;
}?>"> >> </a></th>
            <th><a href="search.php?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;
if ((isset($_smarty_tpl->tpl_vars['searchPriceOt']->value))) {?>&searchPriceOt=<?php echo $_smarty_tpl->tpl_vars['searchPriceOt']->value;
}
if ((isset($_smarty_tpl->tpl_vars['searchPriceDo']->value))) {?>&searchPriceDo=<?php echo $_smarty_tpl->tpl_vars['searchPriceDo']->value;
}
if ((isset($_smarty_tpl->tpl_vars['searchTovar']->value))) {?>&searchTovar=<?php echo $_smarty_tpl->tpl_vars['searchTovar']->value;
}?>"> > </a></th>
        <?php }?>
    </tr>
</table><?php }
}
