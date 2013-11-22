<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $title_page; ?></title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="http://api.html5media.info/1.1.6/html5media.min.js"></script>
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->
    <script src="/js/jquery-latest.min.js" type="text/javascript" charset="utf-8"></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
    <!--<script type="text/javascript" src="/js/selectivizr-min.js"></script>-->
    <![endif]-->
</head>
<!--[if lt IE 9]>
<link rel="stylesheet" href="/css/stylesie.css">
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript">
    document.createElement("nav");
    document.createElement("header");
    document.createElement("footer");
    document.createElement("section");
    document.createElement("article");
    document.createElement("aside");
    document.createElement("hgroup");
</script>
<![endif]-->
<body id="guia">
    <header class="guia">
        <div class="content_headerg">
            <div class="logo_left logo_left_m">
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