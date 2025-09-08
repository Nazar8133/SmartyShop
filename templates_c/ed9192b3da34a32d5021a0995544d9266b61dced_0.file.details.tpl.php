<?php
/* Smarty version 4.3.1, created on 2025-09-08 19:42:58
  from 'D:\OSPanel\domains\smartiShop\templates\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68bf079221ccd0_89692385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed9192b3da34a32d5021a0995544d9266b61dced' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\templates\\details.tpl',
      1 => 1757349777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68bf079221ccd0_89692385 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="span3">
    <a>
        <img src="/images/<?php echo $_smarty_tpl->tpl_vars['tovar']->value['photo'];?>
" style="width:100%"/>
    </a>
    <div id="differentview" class="moreOptopm carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <h4>Дата виготовлення: <?php echo $_smarty_tpl->tpl_vars['tovar']->value['data'];?>
</h4>
            </div>
        </div>
    </div>
    <div class="btn-toolbar">

    </div>
</div>
<div class="span6">
    <h3><?php echo $_smarty_tpl->tpl_vars['tovar']->value['metaTitle'];?>
</h3>
    <hr class="soft"/>
    <form class="form-horizontal qtyFrm">
        <div class="control-group">
            <label class="control-label"><span><?php echo $_smarty_tpl->tpl_vars['tovar']->value['price'];?>
</span></label>
            <div class="controls">
                <?php echo $_smarty_tpl->tpl_vars['tovar']->value['knopka'];?>

            </div>
        </div>
    </form>

    <hr class="soft"/>
    <h4>Кількість на складі: <?php echo $_smarty_tpl->tpl_vars['tovar']->value['kolvo'];?>
</h4>
    <hr class="soft clr"/>
    <p>
        <?php echo $_smarty_tpl->tpl_vars['tovar']->value['har'];?>


    </p>
    <br class="clr"/>
</div><?php }
}
