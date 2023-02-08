<?php
function sum($a, $b)
{
    $result = false;
    if(!is_numeric($a)){
        $result= "Ошибка. Значение 'a'  не является числом";
    } else if(!is_numeric($b)){
        $result= "Ошибка. Значение 'b'  не является числом";}
    else{
        $result = $a+$b;
    }
    echo $result;
}

echo sum('2', 'you');
?>
