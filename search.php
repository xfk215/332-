<?php

// 连接数据库
$conn = mysqli_connect("localhost", "root", "123456", "mysql","3304");

// 接收表单数据
$name = $_POST["name"];

// 从数据库查询数据
$sql = "SELECT * FROM students WHERE name='$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // 查询到数据，输出表格
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>姓名</th><th>年龄</th><th>性别</th><th>专业</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["major"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    // 没有查询到数据，输出提示信息
    echo "没有找到符合条件的学生信息。";
}

// 关闭数据库连接
mysqli_close($conn);

?>