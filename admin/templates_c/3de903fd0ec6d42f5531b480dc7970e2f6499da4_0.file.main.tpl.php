<?php
/* Smarty version 4.3.1, created on 2025-09-08 21:44:50
  from 'D:\OSPanel\domains\smartiShop\admin\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68bf242215c979_12157716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3de903fd0ec6d42f5531b480dc7970e2f6499da4' => 
    array (
      0 => 'D:\\OSPanel\\domains\\smartiShop\\admin\\templates\\main.tpl',
      1 => 1757357088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68bf242215c979_12157716 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
</head>
<body class="sidebar-mini fixed">
<div class="wrapper">
    <!-- Navbar-->
    <header class="main-header hidden-print"><a class="logo" href="index.php">Адмін-панель</a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="top-nav">
                    <!--Notification Menu-->
                    <!--<li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
                        <ul class="dropdown-menu">
                            <li class="not-head">You have 4 new notifications.</li>
                            <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                                    <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                            <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                                    <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                            <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                                    <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                            <li class="not-footer"><a href="#">See all notifications.</a></li>
                        </ul>
                    </li> -->
                    <!-- User Menu-->
                    <?php if ((isset($_smarty_tpl->tpl_vars['userName']->value))) {?>
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="settingUser.php"><i class="fa fa-cog fa-lg"></i> Налаштування</a></li>
                            <li><a href="exit.php"><i class="fa fa-sign-out fa-lg"></i> Вихід</a></li>
                        </ul>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print">
        <?php if ((isset($_smarty_tpl->tpl_vars['userName']->value))) {?>
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image"><img class="img-circle" src="imagesAvatar/<?php echo $_smarty_tpl->tpl_vars['userAvatar']->value;?>
"></div>
                <div class="pull-left info">
                    <p><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</p>
                    <p class="designation"><?php if ($_smarty_tpl->tpl_vars['userRule']->value == 1) {?>Оператор<?php }
if ($_smarty_tpl->tpl_vars['userRule']->value == 2) {?>Адміністратор<?php } else { ?>Зареєструйтесь<?php }?></p>
                </div>
            </div>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li><a href="addBrend.php"><i class="fa fa-pie-chart"></i></i><span>Додати бренд</span></a></li>
                <li><a href="addTovar.php"><i class="fa fa-pie-chart"></i><span>Додати товар</span></a></li>
                <li><a href="adminOrder.php"><i class="fa fa-pie-chart"></i><span>Управління замовленнями</span></a></li>
                <li><a href="orderArchiv.php"><i class="fa fa-pie-chart"></i><span>Архів замовлень</span></a></li>
                <li><a href="infoKlient.php"><i class="fa fa-pie-chart"></i><span>Інформація про покупців</span></a></li>
                <li><a href="indexCut.php"><i class="fa fa-pie-chart"></i><span>Управління брендами</span></a></li>
                <li><a href="indexTovar.php"><i class="fa fa-pie-chart"></i><span>Управління товарами</span></a></li>
                <?php if ($_smarty_tpl->tpl_vars['userRule']->value == 2) {?><li><a href="indexPage.php"><i class="fa fa-pie-chart"></i><span>Управління сторінками</span></a></li><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['userRule']->value == 2) {?><li><a href="registration.php"><i class="fa fa-pie-chart"></i><span>Реєстрація users</span></a></li><?php }?>
                <?php if (!(isset($_smarty_tpl->tpl_vars['userName']->value))) {?><li><a href="login.php"><i class="fa fa-pie-chart"></i><span>Вхід в аккаунт</span></a></li><?php }?>
            </ul>
        </section>
        <?php }?>
    </aside>

    <div class="content-wrapper">
        <div class="page-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Адмінчастина</h1>
                            </div>
            <div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <div><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
                
            </div>
                    </div>
    </div>
</div>
<!-- Javascripts-->
<?php echo '<script'; ?>
 src="js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/plugins/pace.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
