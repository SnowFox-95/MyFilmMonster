<?php
function sum($a, $b)
{
    $result = false;
    if (!is_numeric($a)) {
        $result = "Ошибка. Значение 'a'  не является числом";
    } else if (!is_numeric($b)) {
        $result = "Ошибка. Значение 'b'  не является числом";
    } else {
        $result = $a + $b;
    }
    echo $result;
}

function maxSum($sum)
{
    $result = false;
    if ($sum > 30) {
        $result = "Сумма больше 30";
    } else {
        $result = "Сумма меньше 30";
    }
    return "<br>".$result;
}

echo Maxsum(sum(2, 5));
?>
