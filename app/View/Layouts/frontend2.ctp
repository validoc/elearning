<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $title_page; ?></title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/styles.css">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->
</head>
<body id="guia">
    <header class="guia">
        <div class="content_headerg">
            <div class="logo_left">
                <a href="#"><img src="/images/logo_left.png" alt="novo nordisk"></a>
            </div>
            <div class="center_header">
                <!--<span>Video 1</span>-->
                <?= $title_front; ?>
            </div>
            <div class="logo_right"></div>
        </div>
    </header>
    <?= $this->Session->flash(); ?>
    <?= $this->fetch('content'); ?>
    <footer id="guia">
        <small>
            &copy; NovoNordisk Pharma Argentina S.A.
        </small>
    </footer>
</body>
</html>