<?php
/* Smarty version 4.3.1, created on 2024-06-11 20:03:24
  from 'D:\OSPanel\domains\smartiShop\templates\catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6668835ce73d00_91730606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cebac14c5f6a30c9c0221f00770c4ab566e905b4' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\templates\\catalog.tpl',
      1 => 1718125401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6668835ce73d00_91730606 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sort-wrapper">
    <span class="sort-text">Сортувати за:</span>
    <div class="sort-buttons">
        <a href="catalog.php?sort2=<?php echo $_smarty_tpl->tpl_vars['sort2']->value;
if ((isset($_smarty_tpl->tpl_vars['idBrend']->value))) {?>&id=<?php echo $_smarty_tpl->tpl_vars['idBrend']->value;
}?>" class="sort-button">Назвою</a>
        <a href="catalog.php?sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
if ((isset($_smarty_tpl->tpl_vars['idBrend']->value))) {?>&id=<?php echo $_smarty_tpl->tpl_vars['idBrend']->value;
}?>" class="sort-button">Ціною</a>
    </div>
</div>
<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tovar']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
<li class="span3">
    <div class="thumbnail">
        <a href="product_details.html"><img src="/images/<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" alt="" class="product-image"></a>
        <div class="caption">
            <div class="product-details">
            <h3 class="product-title"><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['metaTitle'];?>
</h3>
            </div>
            <h4 style="text-align:center"><a class="btn" href="details.php?id=<?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"> <i class="icon-zoom-in"></i></a> <?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kolvo'];?>
 <a class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['tovar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</a></h4>
        </div>
    </div>
</li>
<?php
}
}
?>
<div class="pagination-wrapper">
    <table class="pagination">
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
</div>
<?php }
}
