<?php
//$arr[0] = "продукты";
//$arr[1] = "бутылка с водой";

// echo $arr[0]."<br>";
/*вывод отдельного элемента*/

//print_r($arr)."<br>"; /* вывод всех элементов*/

//echo count($arr)."<br>"; /*вывод количества элементов в массиве*/


/*for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i]."<br>";
}*/

//$arr = array("product" => "продукты", "water" => "бутылка с водой"); /*альтернативный способ задать массик в php*/

$arr = ["продукты", "бутылка с водой"]; /*альтерн. способ №3*/

//unset($arr[0]); /*удаление первого элемента*/
array_push($arr, "яблоко"); /*вставка в нового элемента в конец массива*/
array_unshift($arr, "апельсин"); /*вставка в нового элемента в начало массива*/
array_push($arr, "апельсин");

$arr = array_unique($arr); /*удаление дубликатов*/

//$arr = array_reverse($arr); /*"переворачивание" массива*/

//sort($arr); /*сортировка в алфавитном порядке*/

//shuffle($arr); /*перемешивание значений в случ. порядке*/

$arr2= array("кокос","арбуз");
$newarr = array_merge($arr,$arr2); /*объединение 2 массивов в один*/

foreach ($newarr as $key => $value) {
    echo "Ключ к массиву " . $key . " - Значение массива " . $value . "<br>";
}


$str= implode(", ", $newarr); /*перевод массива в строку*/
echo "<br>".$str;
echo "<br>";
$str2 = "продукты, бутылка с водой, кокос";
$str2toarr = explode(", ",$str2);
echo "<pre>"; /*тег для удобного вывода массива через print_r*/
print_r($str2toarr);
echo "</pre>";
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

