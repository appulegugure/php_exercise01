<?php

$msg = '';
$result ='';
$err_msgs = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (empty($_POST['one'])||empty($_POST['two'])||empty($_POST['three'])) {
        $err_msgs[] = '全てに数字を入力して下さい。';
    }else{
        $result = $_POST['one'] + $_POST['two'] + $_POST['three'];
        $msg = '合計値は'.$result.'です';
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
    <h1>数字を入力して下さい。</h1>
    <?php if ($err_msgs): ?>
        <ul>
            <?php foreach ($err_msgs as $err_msg): ?>
                <li><?=$err_msg?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="post">
        <div>
            <label for="name">1つめの数字</label><br>
            <input type="text" name="one" id="one">
        </div>
        <div>
            <label for="age">2つめの数字</label><br>
            <input type="number" name="two" id="two">
        </div>
        <div>
            <label for="age">3つめの数字</label><br>
            <input type="number" name="three" id="three">
        </div>
        <input type="submit" value="送信">
    </form>
    <p><?=htmlspecialchars($msg,ENT_QUOTES,'UTF-8')?></p>
</body>
</html>