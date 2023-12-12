<?php 
    // Kết nối CSDL bằng MySQLi
    $connection = mysqli_connect("localhost", "root", "", "ban_hang");

    // Kiểm tra kết nối
    if (!$connection) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }

    // Truy vấn SQL
    $tv = "SELECT * FROM footer LIMIT 0,1";
    $tv_1 = mysqli_query($connection, $tv);

    // Lấy dữ liệu
    $tv_2 = mysqli_fetch_array($tv_1);
    
    // Hiển thị nội dung HTML
    echo $tv_2['html'];

    // Đóng kết nối
    mysqli_close($connection);
?>
