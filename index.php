<?php

define("DBNAME", "kinomonster");

$name = "Alex";
$balance = 0;
$addBalance1 = 10;
$addBalance2 = 35;

$balance = $addBalance1 + $addBalance2;

$light = "green"; /*Переменная светофор = зеленый/красный*/
if ($light == "green") {
    echo "Светофор зеленый, я перехожу дорогу";
} else {
    echo "Жду когда загорится зеленый";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--<div> Привет, <?php /*echo $name; */ ?></div>--> <!--Внедрение php в html-->

<?php
/*echo "<div>" . $balance . "</div>";
echo DBNAME;*/
?> <!--Внедрение html в php-->
</body>
</html>

