<?php
$msg = '';
$day_today = '';
$youbi_dec = [
    0 => '日曜日',
    1 => '月曜日',
    2 => '火曜日',
    3 => '水曜日',
    4 => '木曜日',
    5 => '金曜日',
    6 => '土曜日',
];
$yyyy_mm_dd = '';
$youbi = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $yyyy_mm_dd = date("Y年m月j日");
    $youbi = $youbi_dec[date("w")];
    $day_today = $yyyy_mm_dd.$youbi;
    $msg = <<<EOM
    <h1>今日は、${day_today}です。</h1>
    <a href=function_5.php>戻る</a>
    EOM;    
    echo $msg;
}else{
    $msg = <<<EMO
    <h1>本日の日付、曜日を確認しますか？</h1>
    <form action="" method="POST">
        <input type="submit" value="はい">
    </form>
    EMO;
    echo $msg;
}

?>
