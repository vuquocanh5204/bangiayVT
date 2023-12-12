<br><br>
Sản phẩm mới <br><br>
<center>
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ban_hang";

    // Tạo kết nối đến MySQL
    $conn = new mysqli($servername, $username, $password, $database);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    $tv = "SELECT id, ten, hinh_anh FROM san_pham ORDER BY id DESC LIMIT 0,3";
    $tv_1 = $conn->query($tv);

    if ($tv_1->num_rows > 0) {
        while ($tv_2 = $tv_1->fetch_assoc()) {
            $link_anh = "hinh_anh/san_pham/" . $tv_2['hinh_anh'];
            $link_chi_tiet = "?thamso=chi_tiet_san_pham&id=" . $tv_2['id'];

            echo "<a href='$link_chi_tiet' >";
            echo "<img src='$link_anh' width='100px' >";
            echo "</a>";
            echo "<br><br>";
            echo $tv_2['ten'];
            echo "<br><br>";
        }
    } else {
        echo "Không có sản phẩm.";
    }

    // Đóng kết nối
    $conn->close();
?>

</center>
