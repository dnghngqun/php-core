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
    echo "xin chào, {$variable}" . "<br/>";
    echo "xin chào, " . $variable . "<br/>";
    echo "Đây là php" . "<br/>"; //câu lệnh in dữ liệu trong php

    $a = 5;
    $b = 6;
    echo $a + $b . "<br/>";

    $isLogin = true;
    if ($isLogin) {
        echo "You login successfully!" . "<br/>";
    } else {
        echo "please Login!" . "<br/>";
    }
    for ($i = 1; $i < 10; $i++) {
        echo $i . "<br/>";
    }

    //  function
    //sum  số lẻ
    function total_odd($n)
    {
        $sum = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 2 != 0) {
                $sum = $sum + $i;
                // $sum += $i; //cách viết 2
            }
        }
        return $sum;
    }

    echo "Total odd: " . total_odd(5) . "<br/>";

    $std1 = "Hong Quan";
    $std2 = "Hằng";

    $stu = array($std1, $std2, "Minh"); //tạo mảng
    $stu[] = "Anh"; //thêm mới dữ liệu mảng, để chỉ số thì sẽ thêm vào chỉ số đó, còn ko thì auto thêm
    $stu[2] = "Anh1";
    //nếu thêm vào vị trí 2 như trên thì sẽ thay thế giá trị của ô 3
    $stu[7] = "Anh5";
    //nếu thêm vào vị trí 7 như kia thì các vị trí chưa có như 5 6, sẽ trống
    //thêm mới phần tử tiếp thì vào vị trí 8 luôn
    echo "in dữ liệu mảng <br/>";
    print_r($stu); //in dữ liệu mảng
    print_r("<br/>Dữ liệu mảng thứ 1: " . $stu[1]); //in dữ liệu thứ 1 của mảng
    //Hằng
    print_r("<br/>Dữ liệu mảng thứ 5: " . $stu[5]); //in dữ liệu thứ 1 của mảng
    // giá trị trống
    //for - each
    echo "<br/>for-each <br/>";
    foreach ($stu as $item) {
        echo $item . "<br/>";
    }
    ?>

    <!-- form -->
    <form action="login.php" method="POST">
        username: <br> <input type="text" name="username"><br>
        pass: <br><input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>