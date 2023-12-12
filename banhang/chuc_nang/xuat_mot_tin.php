<?php 
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0; // Lấy ID và đảm bảo nó là kiểu số nguyên

    // Kết nối đến CSDL (sử dụng MySQLi hoặc PDO)
    $connection = mysqli_connect("localhost", "root", "", "ban_hang");

    // Kiểm tra kết nối
    if($connection === false) {
        die("Lỗi: Không thể kết nối. " . mysqli_connect_error());
    }

    // Sử dụng prepared statements để tránh SQL injection
    $tv = "SELECT * FROM menu_ngang WHERE id=?";
    if($stmt = mysqli_prepare($connection, $tv)) {
        mysqli_stmt_bind_param($stmt, "i", $id); // Gắn tham số vào câu truy vấn
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Lấy dữ liệu từ kết quả
        if(mysqli_num_rows($result) > 0) {
            $tv_2 = mysqli_fetch_array($result);
            echo "<h1>" . $tv_2['ten'] . "</h1>";
            echo $tv_2['noi_dung'];
        } else {
            echo "Không tìm thấy dữ liệu.";
        }

        // Đóng kết quả và statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Lỗi trong việc chuẩn bị truy vấn.";
    }

    // Đóng kết nối
    mysqli_close($connection);
?>
