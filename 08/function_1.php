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
    
    return $time_zone.'のあいさつ'.$greetings[$time_zone];
}

echo get_greeting($time_zone);