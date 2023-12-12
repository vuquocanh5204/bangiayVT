<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ban_hang";

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Đặt chế độ kết nối với UTF-8
$conn->set_charset("utf8");


// Đóng kết nối sau khi đã hoàn thành công việc với CSDL
$conn->close();
?>
