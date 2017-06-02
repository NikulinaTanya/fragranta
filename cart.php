<?php  include($_SERVER['DOCUMENT_ROOT']."/generator/functions.php"); session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fragranta. Интернет-магазин парфюмерии</title>

    <link rel="stylesheet" href="styles/font-awesome.min.css" />
    <link rel="stylesheet" href="styles/font-face.css" />
    <link rel="stylesheet" href="fonts/stroke-gap-icons.min.css" />
    <link rel="stylesheet" href="fonts/OpenSans.css" />
    <link rel="stylesheet" href="styles/jquery-ui.css" />
    <link rel="stylesheet" href="styles/setting.css" />
    <link rel="stylesheet" href="styles/style.css" />

    <script src="js/jQuery.js"></script>
    <script src="js/jQueryUI.js"></script>
</head>
<body>
<?= include($_SERVER['DOCUMENT_ROOT'] . "/templates/template_header.php") ?>
<?= include($_SERVER['DOCUMENT_ROOT'] . "/templates/template_cart.php") ?>
<?= include($_SERVER['DOCUMENT_ROOT'] . "/templates/template_footer.php") ?>

<script src="js/fragranta.js"></script>
<script>$('.open-nav').click();</script>
</body>
</html>