<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $title_page; ?></title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
    <div class="logo_left">
        <a href="#"><img src="/images/logo_left.png" alt="novo nordisk"></a>
    </div>
    <div class="logo_right">
        <h3>eLe<span>ar</span>ning</h3>
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