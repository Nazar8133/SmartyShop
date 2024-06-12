<?php
/* Smarty version 4.3.1, created on 2023-11-05 13:48:07
  from 'C:\OSPanel\domains\smartiShop\admin\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_654772e7aaf2a9_03473333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '571e98ce3f8d6adc6dc8d82ddfda836a7723ef06' => 
    array (
      0 => 'C:\\OSPanel\\domains\\smartiShop\\admin\\templates\\main.tpl',
      1 => 1699181284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654772e7aaf2a9_03473333 (Smarty_Internal_Template $_smarty_tpl) {
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
    <header class="main-header hidden-print"><a class="logo" href="index.html">Vali</a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="top-nav">
                    <!--Notification Menu-->
                    <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
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
                    </li>
                    <!-- User Menu-->
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="settingUser.php"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                            <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                            <li><a href="exit.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image"><img class="img-circle" src="imagesAvatar/<?php echo $_smarty_tpl->tpl_vars['userAvatar']->value;?>
"></div>
                <div class="pull-left info">
                    <p><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</p>
                    <p class="designation"><?php if ($_smarty_tpl->tpl_vars['userRule']->value == 1) {?>Оператор<?php } else { ?>Адміністратор<?php }?></p>
                </div>
            </div>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="active"><a href="addBrend.php"><i class="fa fa-dashboard"></i><span>Додати бренд</span></a></li>
                <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>UI Elements</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="bootstrap-components.html"><i class="fa fa-circle-o"></i> Bootstrap Elements</a></li>
                        <li><a href="ui-font-awesome.html"><i class="fa fa-circle-o"></i> Font Icons</a></li>
                        <li><a href="ui-cards.html"><i class="fa fa-circle-o"></i> Cards</a></li>
                        <li><a href="widgets.html"><i class="fa fa-circle-o"></i> Widgets</a></li>
                    </ul>
                </li>
                <li><a href="addTovar.php"><i class="fa fa-pie-chart"></i><span>Додати товар</span></a></li>
                <li><a href="adminOrder.php"><i class="fa fa-pie-chart"></i><span>Управління замовленнями</span></a></li>
                <li><a href="orderArchiv.php"><i class="fa fa-pie-chart"></i><span>Архів замовлень</span></a></li>
                <li><a href="infoKlient.php"><i class="fa fa-pie-chart"></i><span>Інформація про покупців</span></a></li>
                <li><a href="indexCut.php"><span>Управління брендами</span></a></li>
                <li><a href="indexTovar.php"><span>Управління товарами</span></a></li>
                <?php if ($_smarty_tpl->tpl_vars['userRule']->value == 2) {?><li><a href="indexPage.php"><span>Управління сторінками</span></a></li><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['userRule']->value == 2) {?><li><a href="registration.php"><span>Реєстрація users</span></a></li><?php }?>
                <li><a href="login.php"><span>Вхід в аккаунт</span></a></li>
                <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Forms</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="form-components.html"><i class="fa fa-circle-o"></i> Form Components</a></li>
                        <li><a href="form-custom.html"><i class="fa fa-circle-o"></i> Custom Components</a></li>
                        <li><a href="form-samples.html"><i class="fa fa-circle-o"></i> Form Samples</a></li>
                        <li><a href="form-notifications.html"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
                    </ul>
                </li>
                <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Tables</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="table-basic.html"><i class="fa fa-circle-o"></i> Basic Tables</a></li>
                        <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Data Tables</a></li>
                    </ul>
                </li>
                <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                        <li><a href="page-login.html"><i class="fa fa-circle-o"></i> Login Page</a></li>
                        <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen Page</a></li>
                        <li><a href="page-user.html"><i class="fa fa-circle-o"></i> User Page</a></li>
                        <li><a href="page-invoice.html"><i class="fa fa-circle-o"></i> Invoice Page</a></li>
                        <li><a href="page-calendar.html"><i class="fa fa-circle-o"></i> Calendar Page</a></li>
                        <li><a href="page-mailbox.html"><i class="fa fa-circle-o"></i> Mailbox</a></li>
                        <li><a href="page-error.html"><i class="fa fa-circle-o"></i> Error Page</a></li>
                    </ul>
                </li>
                <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Multilevel Menu</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level One</a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <div class="page-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Адмінчастина</h1>
                            </div>
            <div>
                <ul class="breadcrumb">
                    <li><i class="fa fa-home fa-lg"></i></li>
                    <li><a href="#">Dashboard</a></li>
                </ul>
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
