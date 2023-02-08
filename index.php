<?php
//print_r($_GET);

//echo $_GET['name'];
//print_r($_POST);

if (isset($_POST['name'])) {
    $nameFilter = htmlspecialchars($_POST['name'],ENT_QUOTES, 'UTF-8'); //простая защита от xss-атаки
    echo "Мое имя," . $nameFilter;
}

//$user = "    uSeR   ";
//echo trim($user); //удаление лишних пробелов
//echo mb_strtolower(trim($user)); //приведение строки в строчный вариант + удаление пробелов


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--
<form action="/" method="get">
    <input type="text" name="name" placeholder="Ваше имя">
    <input type="submit" value="отправить">
</form>
-->
<form action="/" method="post">
    <input type="text" name="name" placeholder="Ваше имя">
    <textarea name="comment"></textarea>
    <input type="hidden" name="id_user" value="1239">
    <input type="submit" value="отправить">
</form>
</body>
</html>

