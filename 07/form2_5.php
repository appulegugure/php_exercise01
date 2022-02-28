<?php

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
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $obj = $_POST['buysection'];

    if (empty($name)) {
        $err_msgs[] = '氏名を入力して下さい';
    }

    if (empty($tel)) {
        $err_msgs[] = '電話番号を入力して下さい';
    }

    if (empty($email)) {
        $err_msgs[] = 'メールアドレスを入力して下さい';
    }
    
    if (empty($err_msgs)){
        header("Location: confirm.php?item=${obj}");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>個人情報を入力してください</h3>

    <?php if ($err_msgs): ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_msgs as $err_msg): ?>
                <li><?=$err_msg?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="post">

        <div>
            <label for="">氏名</label><br>
            <input type="text" name="name" value=<?=$name?>>
        </div>
        <div>
            <label for="">電話番号</label><br>
            <input type="text" name="tel" value=<?=$tel?>>
        </div>
        <div>
            <label for="">メールアドレス</label><br>
            <input type="text" name="email" value=<?=$email?>>
        </div>
        <h3>購入するものを選択して下さい</h3>
        <select name="buysection">
            <?php foreach($items as $value):?>
                <option value=<?=$value?>><?=$value?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <div class=" submit">
            <input type="submit" value="送信">
        </div>
    </form>
</body>

</html>