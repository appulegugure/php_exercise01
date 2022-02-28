<?php

require_once __DIR__ . '/function_file.php';

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];
$post_msg = '';
$obj = '';
$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

// コードを追記
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = h($_POST['name']);
    $tel = h($_POST['tel']);
    $email = h($_POST['email']);
    $obj = h($_POST['buyselect']);

    if (empty($name)) {
        $err_msgs[] = '氏名を入力して下さい';
    }

    if (empty($tel)) {
        $err_msgs[] = '電話番号を入力して下さい';
    }

    if (empty($email)) {
        $err_msgs[] = 'メールアドレスを入力して下さい';
    }

    $post_msg = <<<EOM
    <h3>以下のものが送信されました</h3>
    <table>

        <tr>
            <td>氏名:</td>
            <td>${name}</td>
        </tr>
        <tr>
            <td>電話番号:</td>
            <td>${tel}</td>
        </tr>
        <tr>
            <td>メールアドレス:</td>
            <td>${email}</td>
        </tr>
        <tr>
            <td>購入するもの:</td>
            <td>${obj}</td>
        </tr>

    </table>
    EOM;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form2_4</title>
</head>

<body>
    <h3>個人情報を入力してください</h3>

    <?php if ($err_msgs) : ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_msgs as $err_msg) : ?>
                <li><?= $err_msg ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="post">

        <div>
            <label for="input1">氏名</label><br>
            <input type="text" name="name" id="input1" value=<?= $name ?>>
        </div>
        <div>
            <label for="input2">電話番号</label><br>
            <input type="text" name="tel" id="input2" value=<?= $tel ?>>
        </div>
        <div>
            <label for="input3">メールアドレス</label><br>
            <input type="text" name="email" id="input3" value=<?= $email ?>>
        </div>
        <h3>購入するものを選択して下さい</h3>
        <select name="buyselect">
            <?php foreach ($items as $value) : ?>
                <option value=<?= $value ?>><?= $value ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <div class=" submit">
            <input type="submit" value="送信">
        </div>
    </form>
    <?php if (empty($err_msg)) : ?>
        <?= $post_msg ?>
    <?php endif; ?>
</body>

</html>