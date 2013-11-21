<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $title_page; ?></title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
    <?php
        echo $this->Html->script('jquery-1.7.2.min');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body>
<header>
    <div class="content_header">
        <div class="logo_left">
            <a href="#"><img src="/images/logo_left.png" alt="novo nordisk"></a>
        </div>
        <div class="logo_right">
            <h3>
                <img src="/images/degrade.png" alt="E-learning">
            </h3>
        </div>
    </div>
</header>
<?= $this->Session->flash(); ?>
<?= $this->fetch('content'); ?>
<footer>
    <small>
        &copy; NovoNordisk Pharma Argentina S.A.
    </small>
</footer>
</body>
</html>