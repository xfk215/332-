<!DOCTYPE html>
<html>
<head>
    <title>所有学生信息表</title>
    <style type="text/css">

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }


        table,td,th{
            border:1px solid green;
            text-align:center;
        }
        table{
            width:50%;
        }
        th{
            background-color:green;
            color:white;
            height:50px;
        }
    </style>
</head>
<body>
<?php
// 连接数据库
$conn = mysqli_connect("localhost", "root", "456789", "dome", "3306");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Gender</th><th>Major</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["major"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
