<?php 
    if (!isset($bien_bao_mat)) {
        exit();
    }

    // Kết nối đến CSDL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ban_hang";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    $noi_dung = $_POST['noi_dung'];
    $noi_dung = $conn->real_escape_string($noi_dung);

    $sql = "UPDATE quang_cao SET html = ? WHERE vi_tri = 'phai'";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $noi_dung);
        $stmt->execute();
        $stmt->close();
        echo "Đã cập nhật nội dung quảng cáo thành công.";
    } else {
        echo "Lỗi trong việc chuẩn bị truy vấn: " . $conn->error;
    }

    // Đóng kết nối
    $conn->close();
?>
