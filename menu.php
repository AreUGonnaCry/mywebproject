<?php
$menu_item = array("<a href=\"index.php\">Главная</a>", "<a href=\"university.php\">Университет</a>", "<a href=\"subjects.php\">Учебный план</a>", "<a href=\"aboutme.php\">Про меня</a>");
shuffle($menu_item);
foreach ($menu_item as $menu){
    echo "$menu ";
}
?>
<?php
echo "<flex class='color'>"."Время и дата: ".date('d.m.Y H.i')."</flex>";
echo "<flex class='color'>"."IP: ".$_SERVER['REMOTE_ADDR']."</flex>";
?>