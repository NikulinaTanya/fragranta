<?php
include($_SERVER['DOCUMENT_ROOT'] . "/generator/functions.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fragranta. Оставить отзыв.</title>

    <link rel="stylesheet" href="styles/font-awesome.min.css" />
    <link rel="stylesheet" href="styles/font-face.css" />
    <link rel="stylesheet" href="fonts/stroke-gap-icons.min.css" />
    <link rel="stylesheet" href="fonts/OpenSans.css" />
    <link rel="stylesheet" href="styles/jquery-ui.css" />
    <link rel="stylesheet" href="styles/setting.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/admin.css" />

    <script src="js/jQuery.js"></script>
    <script src="js/jQueryUI.js"></script>
</head>
<body>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/templates/add_comment.php");
?>

<script src="js/fragranta.js"></script>
</body>
</html>