<?php

$result = '';

switch ($_GET['operator']) {
    case 'addition':
        $result = $_GET['num1'] + $_GET['num2'];
        echo $_GET['num1'].'+'.$_GET['num2'].'='.$result;
        break;
    case 'subtraction':
        $result = $_GET['num1'] - $_GET['num2'];
        echo $_GET['num1'].'-'.$_GET['num2'].'='.$result;
        break;
    case 'multiplication':
        $result = $_GET['num1'] * $_GET['num2'];
        echo $_GET['num1'].'*'.$_GET['num2'].'='.$result;
        break;
    case 'division':
        $result = $_GET['num1'] / $_GET['num2'];
        echo $_GET['num1'].'/'.$_GET['num2'].'='.$result;
        break;
    default:
        echo'正しい演算子を指定して下さい';
        break;
}

?>