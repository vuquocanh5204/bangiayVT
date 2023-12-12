<?php 
	if(!isset($bien_bao_mat)){exit();}
	// Thực hiện kết nối tới CSDL với MySQLi
	$servername = "localhost"; // Địa chỉ server CSDL
	$username = "root"; // Tên đăng nhập MySQL
	$password = ""; // Mật khẩu MySQL
	$dbname = "ban_hang"; // Tên CSDL

	// Tạo kết nối đến CSDL
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Kiểm tra kết nối
	if ($conn->connect_error) {
		die("Kết nối thất bại: " . $conn->connect_error);
	}

	for($i = 1; $i <= 10; $i++) {
		$ten_select = "select_".$i;
		$ten_id = "id_".$i;

		if(isset($_POST[$ten_id])) {
			$id = $_POST[$ten_id];
			$noi_bat = $_POST[$ten_select];

			$tv = "UPDATE san_pham SET noi_bat = '$noi_bat' WHERE id = '$id'";

			if ($conn->query($tv) === TRUE) {
				echo "Cập nhật thành công.";
			} else {
				echo "Lỗi: " . $conn->error;
			}
		}
	}

	$conn->close();
?>
