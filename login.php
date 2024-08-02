<?php
$defaultUsername = "admin";
$defaultPassword = "admin";
$username = $_POST["username"]; // lấy dữ liệu từ file php_learn1 được gửi bằng method post
$password = $_POST["password"];
if ($username == $defaultUsername && $password == $defaultPassword) {
    echo "login success!";
} else {
    echo "login failed!";
}

echo "<br/>username: " . $username . "<br/>password: " . $password;
