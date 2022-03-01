<?php

// '朝' or '昼' or '夜'を指定
$time_zone = '夜';

function get_greeting($time_zone)
{
    $greetings = [
        '朝' => 'おはよう',
        '昼' => 'こんにちは',
        '夜' => 'こんばんは'
    ];

    return $time_zone . 'のあいさつ' . $greetings[$time_zone];
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function_1</title>
</head>

<body>
    <?= get_greeting($time_zone) ?>
</body>

</html>