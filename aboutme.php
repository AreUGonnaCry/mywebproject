<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="utf-8">
    <title>Пример страницы</title>
</head>
<body>
<header>
<?php include ("menu.php");?>
</header>
<div>
    <?php
    srand((float) microtime() * 10000000);
    $YrPhoto = array("<img src=\"assets/img/1.jpg\" alt=\"I\" title=\"Я\" >", "<img src=\"assets/img/2.jpg\" alt=\"I\" title=\"Я\" >", " <img src=\"assets/img/3.jpg\" alt=\"I\" title=\"Я\" >");
    shuffle($YrPhoto);
    $rand_keys = array_rand($YrPhoto, 3);
    echo $YrPhoto[$rand_keys[0]] . "\n";
    ?>
    <p>3-В</p>
</div>
<div class="tablediv">
    <p ><a href="areugonnacry@gmail.com">areugonnacry@gmail.com</a></p>
</div>
<div >
    <?php
    srand((float) microtime() * 10000000);
    $Yinfo = array("<p class=\"tablediv\">Хотел бы очень хорошо выучить программирование</p>", "<p class=\"tablediv\">Работаю с CMS</p>", " <p class=\"tablediv\">Юра:)</p>");
    shuffle($Yinfo);
    $rand_keys = array_rand($Yinfo, 3);
    echo $Yinfo[$rand_keys[0]] . "\n";
    ?>
</div>
</body>
</html>