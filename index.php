<?php
/*  $arr[0] = "продукты";
    $arr[1] = "бутылка с водой"; */

/* echo $arr[0]."<br>";*/
/*вывод отдельного элемента*/

/*print_r($arr)."<br>";*/ /* вывод всех элементов*/

/*echo count($arr)."<br>";*/ /*вывод количества элементов в массиве*/


/*for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i]."<br>";
}*/

$arr = array("product" => "продукты", "water" => "бутылка с водой"); /*альтернативный способ задать массик в php*/

$arr = ["продукты","бутылка с водой"]; /*альтерн. способ №3*/
foreach ($arr as $key => $value) {
    echo "Ключ к массиву " . $key . " - Значение массива " . $value . "<br>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>

