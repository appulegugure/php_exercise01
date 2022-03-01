<?php

function calc_cal($total_meals)
{
    return array_sum($total_meals);
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


$total_meal = array_merge($today_meal, $yesterday_meal);

echo '摂取カロリーの合計は' . calc_cal($total_meal) . 'Kcalです';
