<?php

$num = 10;

$count = 0;

for ($i = 1; $i <= $num; $i++){
    if ($num % $i == 0){
        $count ++;
    }
}

if ($count == 2){
    echo $num.'は素数です';
}else{
    echo $num.'は素数ではありません';
}
