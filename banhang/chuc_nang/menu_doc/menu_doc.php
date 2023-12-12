<?php 
    // Kết nối CSDL bằng MySQLi
    $connection = mysqli_connect("localhost", "root", "", "ban_hang");

    // Kiểm tra kết nối
    if (!$connection) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }

    // Truy vấn SQL
    $tv = "SELECT * FROM menu_doc ORDER BY id";
    $tv_1 = mysqli_query($connection, $tv);

    echo "<div class='menu_doc' >";
    while ($tv_2 = mysqli_fetch_array($tv_1)) {
        $link = "?thamso=xuat_san_pham&id=" . $tv_2['id'];
        echo "<a href='$link'>";
        echo $tv_2['ten'];
        echo "</a>";
    }
    echo "</div>";

    // Đóng kết nối
    mysqli_close($connection);
?>
