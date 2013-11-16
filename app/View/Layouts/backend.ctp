<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- iOS webapp metatags -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- iOS webapp icons -->
    <link rel="apple-touch-icon-precomposed" href="/images/touch-icon-iphone.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/touch-icon-ipad.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/touch-icon-retina.png" />

    <link rel="stylesheet" type="text/css" href="/css/dandelion.css" />

    <?php
    $user = $this->Session->read('usuario');
    $controller = $this->request->params['controller'];
    $action = $this->request->params['action'];

    echo $this->Html->meta('icon');
    //<!-- CSS Reset -->
    echo $this->Html->css('reset');

    //<!--  Fluid Grid System -->
    echo $this->Html->css('fluid');

    //<!-- Theme Stylesheet -->
    echo $this->Html->css('dandelion.theme');

    //<!-- jQuery JavaScript File -->
    echo $this->Html->script('jquery-1.7.2.min');

    //<!-- Core JavaScript Files -->
    echo $this->Html->script('core/dandelion.core');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>

    <title><?= $title_page; ?></title>
</head>
<body>
<!-- Main Wrapper. Set this to 'fixed' for fixed layout and 'fluid' for fluid layout' -->
<div id="da-wrapper" class="fluid">
<!-- Header -->
<div id="da-header">
    <div id="da-header-top">
        <!-- Container -->
        <div class="da-container clearfix">
            <!-- Logo Container. All images put here will be vertically centere -->
            <div id="da-logo-wrap">
                <div id="da-logo">
                    <div id="da-logo-img">
                        <a href="#">
                            <?= $this->Html->image('/images/logo.png', array('alt' => 'Unicef Admin')); ?>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Toolbar Menu -->
            <div id="da-header-toolbar" class="clearfix">
                <div id="da-user-profile">
                    <div id="da-user-avatar">
                        <?= $this->Html->image('../images/profile.jpg', array('alt' => 'Perfil')); ?>
                    </div>
                    <div id="da-user-info">
                        <?= $user['Usuario']['username']?>
                        <span class="da-user-title">Administrador</span>
                    </div>
                </div>
                <div id="da-header-button-container">
                    <ul>
                        <li class="da-header-button logout">
                            <a href="<?= $this->Html->url(array('controller' => 'usuarios', 'action' => 'logout')) ?>">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="da-header-bottom">
        <!-- Container -->
        <div class="da-container clearfix">
            <!-- Breadcrumbs -->
            <div id="da-breadcrumb">
                <ul>
                    <?php
                    //Miga de Pan
                    $modulo = "";
                    if($action == "admin_index" || $action == "")
                        $modulo = "class='active'";
                    switch($controller) {
                        case "consola":
                            echo "<li $modulo><a href='/admin/$controller'><img src='../images/icons/black/16/home.png' alt='Consola' />Consola</a></li>";
                        break;
                        case "usuarios":
                            echo "<li $modulo><a href='/admin/$controller'><img src='/images/icons/black/16/admin_user.png' alt='Usuarios' />Usuarios</a></li>";
                            switch($action){
                                case "admin_add":
                                    echo "<li class='active'><span>Nuevo</span></li>";
                                break;
                                case "admin_edit":
                                    echo "<li class='active'><span>Editar</span></li>";
                                break;
                            }
                        break;
                        case "participantes":
                            echo "<li $modulo><a href='/admin/$controller'><img src='/images/icons/black/16/user_comment.png' alt='Participantes' />Participantes</a></li>";
                            switch($action){
                                case "admin_add":
                                    echo "<li class='active'><span>Nuevo</span></li>";
                                break;
                                case "admin_edit":
                                    echo "<li class='active'><span>Editar</span></li>";
                                break;
                            }
                        break;
                        case "archivos":
                            echo "<li $modulo><a href='/admin/$controller'><img src='/images/icons/black/16/word_document.png' alt='Archivos' />Archivos</a></li>";
                            switch($action){
                                case "admin_edit":
                                    echo "<li class='active'><span>Editar</span></li>";
                                    break;
                            }
                        break;
                        case "reportes":
                            echo "<li $modulo><a href='/admin/$controller'><img src='/images/icons/black/16/text_document.png' alt='Participantes' />Reportes</a></li>";
                            switch($action){
                                case "admin_ingresos":
                                    echo "<li class='active'><span>R. Ingresos</span></li>";
                                break;
                                case "admin_aciertos":
                                    echo "<li class='active'><span>R. Aciertos</span></li>";
                                break;
                                case "admin_finalizados":
                                    echo "<li class='active'><span>R. Finalizados</span></li>";
                                break;
                                case "admin_intentos":
                                    echo "<li class='active'><span>R. Intentos</span></li>";
                                break;
                            }
                            break;
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Content -->
<div id="da-content">
    <!-- Container -->
    <div class="da-container clearfix">
        <!-- Sidebar Separator do not remove -->
        <div id="da-sidebar-separator"></div>
        <!-- Sidebar -->
        <div id="da-sidebar">
            <!-- Main Navigation -->
            <div id="da-main-nav" class="da-button-container">
                <ul>
                    <li <?= $controller == "consola" ? "class='active'" : ""?>>
                        <a href="/admin/consola">
                                    <span class="da-nav-icon">
                                        <img alt="Consola" src="/img/../images/icons/black/32/home.png">
                                    </span>
                            Consola
                        </a>
                    </li>
                    <li <?= $controller == "usuarios" || $controller == 'usuarios' ? "class='active'" : ""?>>
                        <a href="#">
                            <!-- Icon Container -->
                            <span class="da-nav-icon">
                                <?= $this->Html->image('../images/icons/black/32/admin_user.png', array('alt' => 'Usuarios')); ?>
                            </span>
                            Usuarios
                        </a>
                        <ul <?= $controller == "usuarios" || $controller == 'usuarios'? "" : "class='closed'"?>>
                            <li><?= $this->Html->link('Gestion usuarios', array('controller' => 'usuarios', 'action' => 'index')) ?></li>
                            <li><?= $this->Html->link('Agregar usuario', array('controller' => 'usuarios', 'action' => 'add')) ?></li>
                        </ul>
                    </li>
                    <li <?= $controller == "participantes" || $controller == 'participantes' ? "class='active'" : ""?>>
                        <a href="#">
                            <!-- Icon Container -->
                            <span class="da-nav-icon">
                                <?= $this->Html->image('../images/icons/black/32/user_comment.png', array('alt' => 'participantes')); ?>
                            </span>
                            Participantes
                        </a>
                        <ul <?= $controller == "participantes" || $controller == 'participantes'? "" : "class='closed'"?>>
                            <li><?= $this->Html->link('Gestion participantes', array('controller' => 'participantes', 'action' => 'index')) ?></li>
                            <li><?= $this->Html->link('Agregar participante', array('controller' => 'participantes', 'action' => 'add')) ?></li>
                        </ul>
                    </li>
                    <li <?= $controller == "archivos" || $controller == 'archivos' ? "class='active'" : ""?>>
                        <a href="/admin/archivos">
                            <!-- Icon Container -->
                            <span class="da-nav-icon">
                                <?= $this->Html->image('../images/icons/black/32/word_document.png', array('alt' => 'archivos')); ?>
                            </span>
                            Archivos
                        </a>
                    </li>
                    <li <?= $controller == "reportes" || $controller == 'reportes' ? "class='active'" : ""?>>
                        <a href="#">
                            <!-- Icon Container -->
                            <span class="da-nav-icon">
                                <?= $this->Html->image('../images/icons/black/32/text_document.png', array('alt' => 'reportes')); ?>
                            </span>
                            Reportes
                        </a>
                        <ul <?= $controller == "reportes" || $controller == 'reportes'? "" : "class='closed'"?>>
                            <li><?= $this->Html->link('R. Ingresos', array('controller' => 'reportes', 'action' => 'ingresos')) ?></li>
                            <li><?= $this->Html->link('R. % Aciertos', array('controller' => 'reportes', 'action' => 'aciertos')) ?></li>
                            <li><?= $this->Html->link('R. Finalizados', array('controller' => 'reportes', 'action' => 'finalizados')) ?></li>
                            <li><?= $this->Html->link('R. Intentos x Pregunta', array('controller' => 'reportes', 'action' => 'intentos')) ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Main Content Wrapper -->
        <div id="da-content-wrap" class="clearfix">
            <!-- Content Area -->
            <div id="da-content-area">
                <?= $this->Session->flash(); ?>
                <?= $this->fetch('content'); ?>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
    <div id="da-footer">
        <div class="da-container clearfix">
            <p>Copyright 2013. <a href="http://www.validoc.net">Validoc</a> Admin. All Rights Reserved.
        </div>
    </div>
</div>
<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
