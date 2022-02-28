<?php

$score = '';
$msg = '点数を入力して下さい';
$err_msg = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];
    if (empty($score)) {
        $err_msg = '点数が入力されていません。';
    } elseif ($score >= 60) {
        $result = '合格';
        $msg = '';
    } else {
        $result = '不合格';
        $msg = '';
    }
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
    <?php if (!empty($msg)): ?>
        <h1><?= $msg ?></h1>
    <?php endif; ?>
    <?php if (!empty($result)): ?>
        <h1><?= $result ?></h1>
    <?php endif; ?>
    <ul>
        <?php if (!empty($err_msg)) : ?>
            <li><?= $err_msg ?></li>
        <?php endif; ?>
    </ul>
    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>
</body>

</html>