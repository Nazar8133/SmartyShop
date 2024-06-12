<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>{$title}</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
</head>
<body class="sidebar-mini fixed">
<div class="wrapper">
    <!-- Navbar-->
    <header class="main-header hidden-print"><a class="logo" href="index.php">Vali</a>
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
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="settingUser.php"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
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
                <div class="pull-left image"><img class="img-circle" src="imagesAvatar/{$userAvatar}"></div>
                <div class="pull-left info">
                    <p>{$userName}</p>
                    <p class="designation">{if $userRule==1}Оператор{/if}{if $userRule==2}Адміністратор{else}Зареєструйтесь{/if}</p>
                </div>
            </div>
            <!-- Sidebar Menu-->
            {if isset($userName)}<ul class="sidebar-menu">
                <li><a href="addBrend.php"><i class="fa fa-pie-chart"></i></i><span>Додати бренд</span></a></li>
                <li><a href="addTovar.php"><i class="fa fa-pie-chart"></i><span>Додати товар</span></a></li>
                <li><a href="adminOrder.php"><i class="fa fa-pie-chart"></i><span>Управління замовленнями</span></a></li>
                <li><a href="orderArchiv.php"><i class="fa fa-pie-chart"></i><span>Архів замовлень</span></a></li>
                <li><a href="infoKlient.php"><i class="fa fa-pie-chart"></i><span>Інформація про покупців</span></a></li>
                <li><a href="indexCut.php"><i class="fa fa-pie-chart"></i><span>Управління брендами</span></a></li>
                <li><a href="indexTovar.php"><i class="fa fa-pie-chart"></i><span>Управління товарами</span></a></li>
                {if $userRule==2}<li><a href="indexPage.php"><i class="fa fa-pie-chart"></i><span>Управління сторінками</span></a></li>{/if}
                {if $userRule==2}<li><a href="registration.php"><i class="fa fa-pie-chart"></i><span>Реєстрація users</span></a></li>{/if}
                {if !isset($userName)}<li><a href="login.php"><i class="fa fa-pie-chart"></i><span>Вхід в аккаунт</span></a></li>{/if}
            </ul>{/if}
        </section>
    </aside>
    <div class="content-wrapper">
        <div class="page-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Адмінчастина</h1>
                {*<p>A free and modular admin template</p>*}
            </div>
            <div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>{$title}</h1>
                <div>{$content}</div>
                {*<div class="card">
                    <h3 class="card-title">Getting Started</h3>
                    <p>Vali is a free and responsive dashboard theme built with Bootstrap, Pug.js (templating) and SASS. It's fully customizable and modular. You don't need to add the code, you will not use.</p>
                    <p>The issue with the most admin themes out there is that if you will see their source code there are a hell lot of external CSS and javascript files in there. And if you try to remove a CSS or Javascript file some things stops working.</p>
                    <p>That's why I made Vali. Which is a light weight yet expendable and good looking theme. The theme has all the features required in a dashboard theme but this features are built like plug and play module. Take a look at the <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> about customizing the theme.</p>
                    <p class="mt-40 mb-20"><a class="btn btn-primary icon-btn mr-10" href="http://pratikborsadiya.in/blog/vali-admin" target="_blank"><i class="fa fa-file"></i>Docs</a><a class="btn btn-info icon-btn mr-10" href="https://github.com/pratikborsadiya/vali-admin" target="_blank"><i class="fa fa-github"></i>GitHub</a><a class="btn btn-success icon-btn" href="https://github.com/pratikborsadiya/vali-admin/archive/master.zip" target="_blank"><i class="fa fa-download"></i>Download</a></p>
                </div>*}

            </div>
            {*<div class="col-md-6">
                <div class="card">
                    <h3 class="card-title">Compatibility with frameworks</h3>
                    <p>This theme is not built for a specific framework or technology like Angular or React etc. But due to it's modular nature it's very easy to incorporate it into any front-end or back-end framework like Angular, React or Laravel.</p>
                    <p>Go to <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> for more details about integrating this theme with various frameworks.</p>
                    <p>The source code is available on GitHub. If anything is missing or weird please report it as an issue on <a href="https://github.com/pratikborsadiya/vali-admin" target="_blank">GitHub</a>. If you want to contribute to this theme pull requests are always welcome.</p>
                </div>
            </div>*}
        </div>
    </div>
</div>
<!-- Javascripts-->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/pace.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>