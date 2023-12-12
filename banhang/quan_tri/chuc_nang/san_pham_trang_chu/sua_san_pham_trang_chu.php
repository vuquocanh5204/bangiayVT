<?php 
	if(!isset($bien_bao_mat)){exit();}
	// Kết nối tới CSDL với MySQLi
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
		$ten_select = "select_" . $i;
		$ten_input = "input_" . $i;
		$ten_id = "id_" . $i;

		if(isset($_POST[$ten_id])) {
			$id = $_POST[$ten_id];
			$trang_chu = $_POST[$ten_select];
			$sap_xep_trang_chu = $_POST[$ten_input];

			// Sử dụng câu truy vấn tham số để tránh tấn công SQL Injection
			$tv = "UPDATE san_pham SET 
					trang_chu = ?,
					sap_xep_trang_chu = ?
					WHERE id = ?";

			// Chuẩn bị và thực thi câu truy vấn sử dụng prepared statement
			$stmt = $conn->prepare($tv);
			$stmt->bind_param("ssi", $trang_chu, $sap_xep_trang_chu, $id);
			$stmt->execute();
		}
	}

	// Đóng kết nối CSDL
	$conn->close();
?>
