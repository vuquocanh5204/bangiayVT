<?php 
    // Kết nối CSDL bằng MySQLi
    $connection = mysqli_connect("localhost", "root", "", "ban_hang");

    // Kiểm tra kết nối
    if (!$connection) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }

    // Truy vấn SQL
    $tv = "SELECT * FROM banner LIMIT 0,1";
    $tv_1 = mysqli_query($connection, $tv);

    $tv_2 = mysqli_fetch_array($tv_1);
    $link_hinh = "hinh_anh/banner/" . $tv_2['hinh'];

    echo "<img src='" . $link_hinh . "' width='" . $tv_2['rong'] . "' height='" . $tv_2['cao'] . "' >";

    // Đóng kết nối
    mysqli_close($connection);
?>
