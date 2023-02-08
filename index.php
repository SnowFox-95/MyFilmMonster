<?php
//print_r($_GET);

//echo $_GET['name'];
print_r($_POST);
//if (isset($_POST['name'])) {
//    echo "Мое имя," . $_POST['name'];
//}
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

