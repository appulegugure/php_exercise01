<?php

function calc_cal($total_meals) 
{
    $arry_sum = 0;
    foreach ($total_meals as $key => $value) {
        $arry_sum += $value;
    }
    return $arry_sum;
}

$yesterday_meal = [
    '食パン' => 300, 
    'ステーキ' => 1200, 
    'うどん' => 500
];

$today_meal = [
    'シリアル' => 200, 
    'とんかつ' => 1000,
    'パスタ' => 400
];

// コードを追記
// 標準関数を使用して、配列を結合($yesterday_mealと$today_meal)
$total_meal = array_merge($today_meal,$yesterday_meal);
echo '摂取カロリーの合計は'.calc_cal($total_meal).'Kcalです';