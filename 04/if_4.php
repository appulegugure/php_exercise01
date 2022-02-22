<?php

$score_math = 60;
$score_english = 60;

if ($score_math >= 60 && $score_english >= 60) {
    echo '合格';
} elseif ($score_math >= 50 || $score_english >= 50) {
    echo '再試験';
} else{
    echo '不合格';
}
