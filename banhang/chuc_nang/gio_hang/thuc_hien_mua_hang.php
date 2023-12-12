<?php
if (isset($_SESSION['id_them_vao_gio'])) {
    $ten_nguoi_mua = trim($_POST['ten_nguoi_mua']);
    $email = trim($_POST['email']);
    $dien_thoai = trim($_POST['dien_thoai']);
    $dia_chi = trim(nl2br($_POST['dia_chi']));
    $noi_dung = nl2br($_POST['noi_dung']);

    // Kết nối tới CSDL sử dụng MySQLi
    $mysqli = new mysqli("localhost", "username", "password", "ten_csdl");

    // Kiểm tra kết nối
    if ($mysqli->connect_error) {
        die("Kết nối CSDL thất bại: " . $mysqli->connect_error);
    }

    if ($ten_nguoi_mua != "" && $dien_thoai != "" && $dia_chi != "") {
        $hang_duoc_mua = "";
        for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {
            $hang_duoc_mua = $hang_duoc_mua . $_SESSION['id_them_vao_gio'][$i] . "[|||]" . $_SESSION['sl_them_vao_gio'][$i] . "[|||||]";
        }

        // Chuẩn bị câu lệnh SQL sử dụng MySQLi
        $stmt = $mysqli->prepare("INSERT INTO hoa_don (ten_nguoi_mua, email, dia_chi, dien_thoai, noi_dung, hang_duoc_mua) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $ten_nguoi_mua, $email, $dia_chi, $dien_thoai, $noi_dung, $hang_duoc_mua);
        $stmt->execute();
        $stmt->close();

        unset($_SESSION['id_them_vao_gio']);
        unset($_SESSION['sl_them_vao_gio']);
        thong_bao_html_roi_chuyen_trang("Cảm ơn bạn đã mua hàng tại website của chúng tôi", "index.php");
    } else {
        thong_bao_html("Không được bỏ trống tên người mua, điện thoại, địa chỉ");
        trang_truoc();
        exit();
    }

    // Đóng kết nối MySQLi
    $mysqli->close();
}
?>