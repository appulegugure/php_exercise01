<?php
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = '私は' . $_POST['old'] . '歳です';
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
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <label for="nennrei">年齢</label><br>
            <input type="text" name="old" id="nennrei">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>