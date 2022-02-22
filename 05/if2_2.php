<?php

$poket_money = 1000;
$fund_raising = 101;

echo "あなたの所持金は${poket_money}です" . '<br>';

do {

    $poket_money = $poket_money - $fund_raising;
    echo "${fund_raising}円募金しました" . '<br>';
    echo "残り残高は${poket_money}です" . '<br>';
    
} while ($poket_money >= $fund_raising);

echo 'あなたはこれ以上募金できません';