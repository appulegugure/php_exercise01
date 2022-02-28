<?php

$result = '';
$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    switch ($_GET['operator']) {
        case 'addition':
            $result = $_GET['num1'] + $_GET['num2'];
            $msg = $_GET['num1'] . '+' . $_GET['num2'] . '=' . $result;
            break;
        case 'subtraction':
            $result = $_GET['num1'] - $_GET['num2'];
            $msg = $_GET['num1'] . '-' . $_GET['num2'] . '=' . $result;
            break;
        case 'multiplication':
            $result = $_GET['num1'] * $_GET['num2'];
            $msg = $_GET['num1'] . '*' . $_GET['num2'] . '=' . $result;
            break;
        case 'division':
            $result = $_GET['num1'] / $_GET['num2'];
            $msg = $_GET['num1'] . '/' . $_GET['num2'] . '=' . $result;
            break;
        default:
            $msg = '正しい演算子を指定して下さい';
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_5</title>
</head>

<body>
    <?= $msg ?>
</body>

</html>