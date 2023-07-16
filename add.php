<?php

// 连接数据库
$conn = mysqli_connect("localhost", "root", "123456", "mysql","3304");

// 接收表单数据
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$major = $_POST["major"];

// 将数据插入数据库
$sql = "INSERT INTO students (name, age, gender, major) VALUES ('$name', '$age', '$gender', '$major')";
$result = mysqli_query($conn, $sql);

if ($result) {
    // 添加成功，跳转回首页
    header("Location: index.php");
} else {
    // 添加失败，输出错误信息
    echo "添加失败：" . mysqli_error($conn);
}

// 关闭数据库连接
mysqli_close($conn);

?>