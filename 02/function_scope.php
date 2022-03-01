<?php

function add($a, $b)
{
    $sum = $a + $b;
    return $sum;
}

// 関数呼び出し
$sum = add(2, 3);

// NULLが表示される
var_dump($sum);