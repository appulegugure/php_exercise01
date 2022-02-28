<?php

$msg = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST['old'])) {
        $err_msg = '年齢を入力して下さい。';
    } else {
        $msg = '私は' . $_POST['old'] . '歳です';
    }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームの練習</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="post">
        <?php if (!empty($err_msg)) : ?>
            <ul>
                <li><?= $err_msg ?></li>
            </ul>
        <?php endif; ?>
        <div>
            <label for="">年齢</label><br>
            <input type="text" name="old">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <p><?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>