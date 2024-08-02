<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>php basic</h1>
    <?php
    $variable = "Hong Quan";
    echo "xin chào, {$variable}";
    echo "xin chào, " . $variable;
    echo "Đây là php"; //câu lệnh in dữ liệu trong php

    $a = 5;
    $b = 6;
    echo $a + $b;

    $isLogin = true;
    if ($isLogin) {
        echo "You login successfully!";
    } else {
        echo "please Login!";
    }
    
    ?>
</body>

</html>