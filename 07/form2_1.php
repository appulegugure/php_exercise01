<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$select_stylist = '';
$result = '';
$msg  = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $msg = 'あなたの担当は' . $_POST['stylist'] . 'です';
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylist">
            <option value=<?= $stylists['スタイリスト'] ?>>スタイリスト</option>
            <option value=<?= $stylists['ハイスタイリスト'] ?>>ハイスタイリスト</option>
            <option value=<?= $stylists['トップスタイリスト'] ?>>トップスタイリスト</option>
        </select>
        <br>
        <input type="submit" value="送信">
    </form>
    <?= $msg ?>
</body>

</html>